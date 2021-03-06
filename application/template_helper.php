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
    function admin_parse($content, $data){
        $CI =& get_instance();
        $header = $CI->load->view('Templates/Admin/_header.php', $data, TRUE);
        $foter = $CI->load->view('Templates/Admin/_footer.php', $data, TRUE);
        $sidebar = $CI->load->view('Templates/Admin/_sidebar.php', $data, TRUE);
        $template = 'Templates/Admin/__quick-template.php';
        $data = [
            '_footer_' => $foter,
            '_header_' => $header,
            '_sidebar_' => $sidebar,
            '_content_' => $CI->load->view($content, $data, true)
        ];
        $CI->parser->parse($template, $data);
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
    function json_output($status = null, $msg = ' Data Found', $data = []){
		$result = [
			'kode' => $status, 
			'msg' => $msg,
			'data' => $data
		];
		return $result;
    }
    function send_email($to, $cc, $bcc, $subject, $msg){
        $CI =& get_instance();
        $configEmail = $CI->config->item('email');
        $CI->email->initialize($configEmail);
        $CI->email->set_newline("\r\n");
        $CI->email->from($configEmail['smtp_user'], 'KJKPI');
        $CI->email->to($to);
        $CI->email->subject($subject);
        $CI->email->message($msg);
        if($CI->email->send()){
        return 'sukses';
     } else {
        echo 'gagal';
        echo $CI->email->print_debugger();
        die;
         }
        }
        function rupiah($angka){
	
            $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
            return $hasil_rupiah;
         
        }
?>