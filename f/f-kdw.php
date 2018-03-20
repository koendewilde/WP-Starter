<?php


// social icons
function kdw_return_svg_icon($icon) {
    
    if ($icon == 'facebook')
    {
      	//facebook
      	$svg = '<svg aria-labelledby="facebook-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon"><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0" class="icon-color"/></svg>';
    } 
    else if ($icon == 'twitter')
    {
        //twitter
        $svg = '<svg aria-labelledby="twitter-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon"><path d="M23.954 4.569a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 0 0-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 0 0-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 0 1-2.228-.616v.061a4.923 4.923 0 0 0 3.946 4.827 4.996 4.996 0 0 1-2.212.085 4.937 4.937 0 0 0 4.604 3.417 9.868 9.868 0 0 1-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0 0 7.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 0 0 2.46-2.548l-.047-.02z" class="icon-color"/></svg>';
    }
    else if ($icon == 'linkedin')
    {
        //linkedin
        $svg = '<svg aria-labelledby="linkedin-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" class="icon-color"/></svg>';
    } 
    else if ($icon == 'instagram')
    {
        //instagram
        $svg = '<svg aria-labelledby="instagram-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913a5.885 5.885 0 0 0 1.384 2.126A5.868 5.868 0 0 0 4.14 23.37c.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558a5.898 5.898 0 0 0 2.126-1.384 5.86 5.86 0 0 0 1.384-2.126c.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913a5.89 5.89 0 0 0-1.384-2.126A5.847 5.847 0 0 0 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227a3.81 3.81 0 0 1-.899 1.382 3.744 3.744 0 0 1-1.38.896c-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421a3.716 3.716 0 0 1-1.379-.899 3.644 3.644 0 0 1-.9-1.38c-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 1 0 0-12.324zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405a1.441 1.441 0 0 1-2.88 0 1.44 1.44 0 0 1 2.88 0z" class="icon-color"/></svg>';
    }
    else
    {
        $svg = false;
    }

    if ($svg){
      return $svg;
    }

}


// theme icons
function kdw_return_theme_icon($icon) {
    
    if ($icon == 'phone')
    {
      	//phone
      	$svg = '<svg viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" class="svg-icon"><path fill="none" d="M0 0h96v96H0z"/><path d="M93 74.08c0 1.15-.213 2.652-.64 4.506-.426 1.854-.873 3.313-1.342 4.378-.894 2.131-3.494 4.39-7.798 6.776C79.214 91.913 75.251 93 71.33 93a24.68 24.68 0 0 1-3.355-.224c-1.087-.149-2.312-.415-3.675-.799-1.364-.383-2.376-.692-3.037-.927-.66-.234-1.843-.67-3.547-1.31-1.705-.64-2.749-1.023-3.132-1.15-4.176-1.492-7.905-3.26-11.186-5.306-5.455-3.366-11.09-7.958-16.907-13.775S16.082 58.057 12.716 52.602c-2.046-3.281-3.814-7.01-5.305-11.186-.128-.383-.512-1.427-1.151-3.132a252.204 252.204 0 0 1-1.31-3.548c-.235-.66-.544-1.672-.927-3.036-.384-1.363-.65-2.589-.8-3.675A24.661 24.661 0 0 1 3 24.669c0-3.92 1.087-7.883 3.26-11.89 2.386-4.303 4.645-6.903 6.776-7.798 1.065-.468 2.524-.915 4.378-1.342C19.268 3.213 20.77 3 21.92 3c.597 0 1.044.064 1.343.192.767.255 1.896 1.875 3.388 4.858.468.81 1.107 1.96 1.917 3.451.81 1.492 1.556 2.845 2.237 4.06a137.722 137.722 0 0 0 1.982 3.42c.128.17.5.702 1.119 1.597.617.895 1.075 1.651 1.374 2.27.298.617.447 1.225.447 1.821 0 .852-.607 1.918-1.821 3.196a31.162 31.162 0 0 1-3.964 3.516 38.497 38.497 0 0 0-3.963 3.387c-1.214 1.194-1.821 2.174-1.821 2.94 0 .384.106.864.32 1.439.212.575.393 1.012.543 1.31.149.299.447.81.894 1.534.448.725.693 1.13.736 1.215 3.238 5.838 6.946 10.845 11.122 15.021s9.183 7.884 15.021 11.122c.085.043.49.288 1.214.736.725.447 1.236.745 1.535.894.298.15.735.33 1.31.544.575.213 1.055.32 1.438.32.767 0 1.747-.608 2.94-1.822a38.497 38.497 0 0 0 3.388-3.963 31.162 31.162 0 0 1 3.516-3.964c1.278-1.214 2.344-1.821 3.196-1.821.596 0 1.204.149 1.822.447.618.298 1.374.757 2.269 1.374.895.618 1.427.991 1.598 1.12 1.065.638 2.205 1.299 3.42 1.98 1.214.682 2.567 1.428 4.059 2.238 1.49.81 2.641 1.449 3.451 1.917 2.983 1.492 4.602 2.621 4.858 3.388.128.299.192.746.192 1.343z" class="icon-color" fill-rule="nonzero"/></svg>';
    }
    else if ($icon == 'email')
    {
        //email
        $svg = '<svg viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" class="svg-icon"><path fill="none" d="M0 0h96v96H0z"/><path d="M48.963 4.797c-3.207.322-4.395.492-6.567.934-15.985 3.24-28.61 14.593-33.82 30.426-4.26 12.913-3.19 26.523 2.868 36.824 5.396 9.164 14.984 15.663 25.896 17.581 7.891 1.374 17.835.629 25.336-1.883 2.019-.662 5.498-2.138 6.092-2.563.271-.17.678-.679.933-1.103 1.205-2.054.051-4.836-2.256-5.481-1.035-.289-1.782-.153-3.462.645-2.987 1.408-7.688 2.63-11.879 3.089-2.29.254-7.246.254-9.418 0-15.036-1.749-24.963-11.66-26.898-26.813-.475-3.801-.373-9.01.271-13.033 2.953-18.43 17.258-31.09 35.127-31.09 7.127 0 12.999 1.613 18.073 4.956 2.138 1.409 5.329 4.599 6.754 6.737 2.477 3.75 3.988 7.993 4.615 12.965.306 2.495.12 8.333-.34 10.81-1.204 6.448-4.225 11.437-8.026 13.304-3.547 1.749-6.058.968-6.855-2.121-.543-2.104-.305-4.328 1.968-18.209 1.578-9.774 1.986-12.575 1.833-12.693-1.324-.831-5.735-2.087-9.214-2.613-2.953-.441-8.129-.407-10.776.068-2.427.441-4.582 1.052-6.448 1.85-9.876 4.192-16.206 13.219-17.14 24.47-.763 9.045 3.038 15.866 9.945 17.869 1.17.34 1.697.39 4.14.373 2.308-.017 3.038-.068 4.107-.373 2.834-.781 5.091-1.951 7.246-3.801 1.357-1.155 3.241-3.326 3.971-4.582.458-.798.798-.832.798-.085 0 .831.645 2.97 1.205 4.022 1.629 3.037 4.497 4.683 8.586 4.87 3.632.187 7.026-.526 10.318-2.155 7.517-3.7 12.37-11.352 13.762-21.67.39-2.886.39-8.4 0-10.997-1.24-8.264-4.582-14.984-10.08-20.295-5.651-5.482-12.88-8.841-21.5-9.996-1.41-.187-7.977-.356-9.165-.237zm5.906 30.291c.696.101 1.34.237 1.425.289.204.135-1.46 11.743-1.969 13.813a21.673 21.673 0 0 1-2.19 5.295c-1.102 1.866-3.478 4.26-4.954 4.972-2.648 1.289-5.669.899-7.348-.95-1.289-1.444-1.815-3.158-1.815-6.06 0-5.073 1.799-9.79 4.99-13.117 3.393-3.512 7.313-4.92 11.861-4.242z" class="icon-color" fill-rule="nonzero"/></svg>';
    } 
    else
    {
        $svg = false;
    }

    if ($svg){ 
      return $svg;
    }

}



// shorten excerpt 
function excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, '<span class="read-more-dots">&hellip;</span>');
}


/* ACF helpers: link button */
function kdw_link_button($acf, $class=''){

    $link = get_field($acf);
    
    if( $link ){
	   echo '<a class="'.$class.'" href="'. $link['url'].'" target="'. $link['target'].'">' . $link['title'].'</a>';
    }
    
}


// phone number link
function get_phone_link($number){
    $phone = preg_replace('/[^\d+]/', '', $number);
    $link = '<a href="tel:'.$phone.'">'.$number.'</a>';
    return $link;
}


/* Safe email shortcode */
// Example: [antispam email="name@website.nl" name="optioneel"]
function sEmail($emailname) {
	extract(shortcode_atts(array( 	'email' => '#', 'name' => ''	), $emailname, 'antispam'));
	if ($name == '') { $name = $email; };
	return hide_email_txt($email, $name);
}
add_shortcode('antispam', 'sEmail');


/* Safe email functions */
function hide_email($email) { 
	$character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz'; $key = str_shuffle($character_set); $cipher_text = ''; $id = 'e'.rand(1,999999999); for ($i=0;$i<strlen($email);$i+=1) $cipher_text.= $key[strpos($character_set,$email[$i])]; $script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";'; $script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));'; $script.= 'document.getElementById("'.$id.'").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"'; $script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")"; $script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>'; return '<span id="'.$id.'">[email]</span>'.$script; 
}
	
function hide_email_txt($email,$txt) { 
	$character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz'; $key = str_shuffle($character_set); $cipher_text = ''; $id = 'e'.rand(1,999999999); for ($i=0;$i<strlen($email);$i+=1) $cipher_text.= $key[strpos($character_set,$email[$i])]; $script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";'; $script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));'; $script.= 'document.getElementById("'.$id.'").innerHTML="<a id=\\"action-button\\" href=\\"mailto:"+d+"\\">'.$txt.'</a>"'; $script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")"; $script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>'; return '<span id="'.$id.'">[email]</span>'.$script; 
}

function hide_email_icontxt($email) { 
	$character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz'; $key = str_shuffle($character_set); $cipher_text = ''; $id = 'e'.rand(1,999999999); for ($i=0;$i<strlen($email);$i+=1) $cipher_text.= $key[strpos($character_set,$email[$i])]; $script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";'; $script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));'; $script.= 'document.getElementById("'.$id.'").innerHTML="<a class=\\"icon-email\\" href=\\"mailto:"+d+"\\"><span><i class=\\"ion-ios-email\\"></i></span>"+d+"</a>"'; $script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")"; $script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>'; return '<span id="'.$id.'">[email]</span>'.$script; 
}
	
function hide_email_icon($email) { 
	$character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz'; $key = str_shuffle($character_set); $cipher_text = ''; $id = 'e'.rand(1,999999999); for ($i=0;$i<strlen($email);$i+=1) $cipher_text.= $key[strpos($character_set,$email[$i])]; $script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";'; $script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));'; $script.= 'document.getElementById("'.$id.'").innerHTML="<a href=\\"mailto:"+d+"\\" title=\\""+d+"\\" ><span><i class=\\"ion-ios-email\\"></i></span></a>"'; $script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")"; $script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>'; return '<span id="'.$id.'">[email]</span>'.$script; 
}

function hide_email_button($email,$txt) { 
	$character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz'; $key = str_shuffle($character_set); $cipher_text = ''; $id = 'e'.rand(1,999999999); for ($i=0;$i<strlen($email);$i+=1) $cipher_text.= $key[strpos($character_set,$email[$i])]; $script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";'; $script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));'; $script.= 'document.getElementById("'.$id.'").innerHTML="<a class=\\"button-green-outline\\" href=\\"mailto:"+d+"\\">'.$txt.'</a>"'; $script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")"; $script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>'; return '<span id="'.$id.'">[email]</span>'.$script; 
}
