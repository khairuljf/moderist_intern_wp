jQuery(document).ready(function(){
    jQuery(".imgupload").click(function(){
        
       tb_show('','media-upload.php?post_id=1&type=image&TB_iframe=1');
        
        
        return false;
    });
   
    
    window.send_to_editor = function(html){
        var imglink = jQuery('img',html).attr('src');
        
        jQuery('.image1').val(imglink);
       tb_remove();
    };
    
    
    
}); 


