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
?>