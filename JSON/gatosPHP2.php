<?php

$json = file_get_contents('http://api.flickr.com/services/feeds/photos_public.gne?format=json&jsoncallback=?');

echo (var_dump($json));

function json_decode_nice($json, $assoc = FALSE){
    $json = str_replace(array("\n","\r"),"",$json);
    $json = preg_replace('/([{,])(\s*)([^"]+?)\s*:/','$1"$3":',$json);
    return json_decode($json,$assoc);
}





//$str_obj_jsonp = preg_replace('/.+?({.+}).+/','$1',$str_obj_jsonp); 
echo (var_dump(json_decode_nice($json)));

/*
def render_json(json, options={})
    callback, variable = params[:callback], params[:variable]
    response = begin
      if callback && variable
        "var #{variable} = #{json};\n#{callback}(#{variable});"
      elsif variable
        "var #{variable} = #{json};"
      elsif callback
        "#{callback}(#{json});"
      else
        json
      end
    end
    render({:content_type => :js, :text => response}.merge(options))
end
*/
?>

