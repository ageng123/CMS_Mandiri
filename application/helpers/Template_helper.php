<?php
    function landing_parse($content, $data){
        $CI =& get_instance();
        $header = $CI->load->view('Templates/Landing/_header.php', $data, TRUE);
        $foter = $CI->load->view('Templates/Landing/_footer.php', $data, TRUE);
        $template = 'Templates/Landing/_all.php';
        $data = [
            '_footer_' => $foter,
            '_header_' => $header,
            '_content_' => $CI->load->view($content, $data, true)
        ];
        $CI->parser->parse($template, $data);
    }
    function admin_parse(){

    }
    function encode($msg){
        $CI =& get_instance();
        $CI->encryption->initialize(array(
            'cipher' => 'blowfish',
            'mode' => 'cbc',
            'key' => $CI->config->item('encryption_key')
        ));
        $encoded = $CI->encryption->encrypt($msg);
        return base64_encode($encoded);
    }
    function decode($msg){
        $CI =& get_instance();
        $code = base64_decode($msg);
        $CI->encryption->initialize(array(
            'cipher' => 'blowfish',
            'mode' => 'cbc',
            'key' => $CI->config->item('encryption_key')
        ));
        $decoded = $CI->encryption->decrypt($code);
        return $decoded;
    }
?>