<?php

class TelegramBot
{

    private $version = '1.0';
    private $bot;
    private $api_url;

    public function __construct($bot_token = null)
    {
        if (strlen($bot_token) == 0) {
            die("Error ! Bot Token takde. Check balik.");
        }
        $this->api_url = 'https://api.telegram.org/bot'.$bot_token.'/';
    }

    public function version() {
        return $this->version;
    }

    public function exec_curl_request($handle) {
        $response = curl_exec($handle);
        if ($response === false) {
            $errno = curl_errno($handle);
            $error = curl_error($handle);
            error_log("Curl returned error $errno: $error\n");
            curl_close($handle);
            return false;
        }

        $http_code = intval(curl_getinfo($handle, CURLINFO_HTTP_CODE));
        curl_close($handle);

        if ($http_code >= 500) {
            sleep(10);
            return false;
        } else if ($http_code != 200) {
            $response = json_decode($response, true);
            error_log("Request has failed with error {$response['error_code']}: {$response['description']}\n");
            if ($http_code == 401) {
                throw new Exception('Invalid access token provided');
            }
            return false;
        } else {
            $response = json_decode($response, true);
            if (isset($response['description'])) {
                error_log("Request was successfull: {$response['description']}\n");
            }
            $response = $response['result'];
        }
        return $response;
    }

    public function apiRequest($method, $parameters) {
        if (!is_string($method)) {
            error_log("Method name must be a string\n");
            return false;
        }

        if (!$parameters) {
            $parameters = array();
        } else if (!is_array($parameters)) {
            error_log("Parameters must be an array\n");
            return false;
        }

        foreach ($parameters as $key => &$val) {
            if (!is_numeric($val) && !is_string($val)) {
                $val = json_encode($val);
            }
        }

        $parameters["method"] = $method;
        $handle = curl_init($this->api_url);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($handle, CURLOPT_TIMEOUT, 60);
        curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($parameters));
        curl_setopt($handle, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));

        return $this->exec_curl_request($handle);
    }

    public function apiRequestGetContent($method, $data) {
        if (!is_string($method)) {
            return false;
        }

        if (!$data) {
            $data = [];
        } elseif (!is_array($data)) {
            return false;
        }
        $url = $this->api_url . $method;
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result;
    }


    // Telegram Method
    public function sendApiMsg($chatid, $text, $msg_reply_id = false, $parse_mode = false, $disablepreview = false, $disablenotify = false)
    {
        $method = 'sendMessage';
        $data = ['chat_id' => $chatid, 'text'  => $text];
        if ($msg_reply_id) {
            $data['reply_to_message_id'] = $msg_reply_id;
        }
        if ($parse_mode) {
            $data['parse_mode'] = $parse_mode;
        }
        if ($disablepreview) {
            $data['disable_web_page_preview'] = $disablepreview;
        }
        if ($disablenotify) {
            $data['disable_notification'] = $disablenotify;
        }
        return $this->apiRequest($method, $data);
    }
    public function sendApiPhoto($chatid, $photo, $caption = null, $msg_reply_id = false, $parse_mode = false, $disablenotify = false)
    {
        $method = 'sendPhoto';
        $data = ['chat_id' => $chatid,'photo'  => $photo];
        if ($msg_reply_id) {
            $data['reply_to_message_id'] = $msg_reply_id;
        }
        if ($parse_mode) {
            $data['parse_mode'] = $parse_mode;
        }    
        if ($caption != null) {
            $data['caption'] = $caption;
        }
        if ($disablenotify) {
            $data['disable_notification'] = $disablenotify;
        }
        $result = $this->apiRequest($method, $data);
    }
    public function sendApiAction($chatid, $action = 'typing')
    {
        $method = 'sendChatAction';
        $data = [
            'chat_id' => $chatid,
            'action'  => $action,
        ];
        $result = $this->apiRequest($method, $data);
    }
    public function sendApiKeyboard($chatid, $text, $parse = 'html', $keyboard = [], $inline = false)
    {
        $method = 'sendMessage';
        $replyMarkup = [
            'keyboard'        => $keyboard,
            'resize_keyboard' => true,
        ];
        $data = [
            'chat_id'    => $chatid,
            'text'       => $text,
            'parse_mode' => $parse,
        ];

        $inline
        ? $data['reply_markup'] = json_encode(['inline_keyboard' => $keyboard])
        : $data['reply_markup'] = json_encode($replyMarkup);
        $result = $this->apiRequest($method, $data);
    }
    public function editMessageText($chatid, $message_id, $text, $parse = 'html', $keyboard = [], $inline = false)
    {
        $method = 'editMessageText';
        $replyMarkup = [
            'keyboard'        => $keyboard,
            'resize_keyboard' => true,
        ];
        $data = [
            'chat_id'    => $chatid,
            'message_id' => $message_id,
            'text'       => $text,
            'parse_mode' => $parse,
        ];

        $inline
        ? $data['reply_markup'] = json_encode(['inline_keyboard' => $keyboard])
        : $data['reply_markup'] = json_encode($replyMarkup);
        $result = $this->apiRequest($method, $data);
    }
    public function sendApiHideKeyboard($chatid, $text, $parse = 'html')
    {
        $method = 'sendMessage';
        $data = [
            'chat_id'       => $chatid,
            'text'          => $text,
            'parse_mode'    => $parse,
            'reply_markup'  => json_encode(['hide_keyboard' => true]),
        ];
        $result = $this->apiRequest($method, $data);
    }
    public function sendApiSticker($chatid, $sticker, $msg_reply_id = false)
    {
        $method = 'sendSticker';
        $data = [
            'chat_id'  => $chatid,
            'sticker'  => $sticker,
        ];
        if ($msg_reply_id) {
            $data['reply_to_message_id'] = $msg_reply_id;
        }
        $result = $this->apiRequest($method, $data);
    }
}
?>
