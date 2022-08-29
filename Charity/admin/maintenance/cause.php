<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<?php 
$data = file_get_contents(base_app.'cause.json');
$data = json_decode($data);
?>

<style>
    .note-group-select-from-files {
        display: none;
    }
    .uploaded_img{
        width:150px;
        height:135px;
        object-fit:scale-down;
        object-position:center center;
    }
    .img-panel{
        width:170px; 
    }
</style>
<div class="card card-outline card-info">
	<div class="card-header">
		<h3 class="card-title"><?php echo isset($id) ? "Update ": "Create New " ?> cause</h3>
	</div>
	<div class="card-body">
		<form action="" id="cause-form">
			<input type="hidden" name ="id" value="<?php echo isset($id) ? $id : '' ?>">
            <div class="form-group">
				<label for="content" class="control-label">Cause Content</label>
                <textarea name="content" id="" cols="30" rows="2" class="form-control form no-resize summernote"><?php echo isset($data->content) ? stripslashes(html_entity_decode($data->content)) : ''; ?></textarea>
			</div>
            
            <div class="form-group">
				<label for="keywords" class="control-label">Keywords <small>(seperate the keywors using comma ",")</small></label>
                <textarea name="keywords" id="" cols="30" rows="3" class="form-control form "><?php echo isset($data->keywords) ? $data->keywords : ''; ?></textarea>
			</div>
            <div class="form-group">
				<label for="meta_description" class="control-label">Meta Description</label>
                <textarea name="meta_description" id="" cols="30" rows="3" class="form-control form "><?php echo isset($data->meta_description) ? $data->meta_description : ''; ?></textarea>
			</div>
            <div class="form-group">
				<label for="" class="control-label">Images</label>
				<div class="custom-file">
                    <input type="hidden" name="upload_code" value="causes_uploads">
	              <input type="file" class="custom-file-input rounded-circle" id="customFile" name="img[]" multiple accept="image/*" onchange="upload_images(this,$(this))">
	              <label class="custom-file-label" for="customFile">Choose file</label>
	            </div>
			</div>
            <div class="form-group" id="uploaded-holder">

            <?php 
            $upload_path = "uploads/blog_uploads/causes_uploads";
            if(is_dir(base_app.$upload_path)): 
            ?>
            <?php 
            
                $file= scandir(base_app.$upload_path);
                foreach($file as $img):
                    if(in_array($img,array('.','..')))
                        continue;
                    
                
            ?>
                <div class="d-flex w-100 align-items-center img-item">
                    <div class="img-panel">
                        <img src="<?php echo base_url.$upload_path.'/'.$img ?>" class="img-thumbnail uploaded_img" alt="cause_uploads"> <br>
                        <a href="<?php echo base_url.$upload_path.'/'.$img ?>" target="_blank" class="upload_link"><?php echo $img ?></a>
                    </div>
                    <span class="ml-4"><button class="btn btn-sm btn-default text-danger rem_img" type="button" data-path="<?php echo $upload_path.'/'.$img ?>" onclick="rem_img($(this))"><i class="fa fa-trash"></i></button></span>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
			</div>
		</form>
	</div>
	<div class="card-footer">
		<button class="btn btn-flat btn-primary" form="cause-form">Save</button>
	</div>
</div>
<div class="d-none" id="upload_clone">
<div class="d-flex w-100 align-items-center img-item">
    <span>
        <img src="" class="img-thumbnail uploaded_img" alt="cause_uploads"> <br>
        <a href="" target="_blank" class="upload_link"></a>
    </span>
    <span class="ml-4"><button class="btn btn-sm btn-default text-danger rem_img" type="button" data-path="" onclick="rem_img($(this))"><i class="fa fa-trash"></i></button></span>
</div>
</div>
<script>
    function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
            _this.siblings('.custom-file-label').html(input.files[0].name)
	        reader.onload = function (e) {
	        	$('#banner_img').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
    function delete_img($path){
        start_loader()
        
        $.ajax({
            url: _base_url_+'classes/Master.php?f=delete_img',
            data:{path:$path},
            method:'POST',
            dataType:"json",
            error:err=>{
                console.log(err)
                alert_toast("An error occured while deleting an Image","error");
                end_loader()
            },
            success:function(resp){
                $('.modal').modal('hide')
                if(typeof resp =='object' && resp.status == 'success'){
                    $('[data-path="'+$path+'"]').closest('.img-item').hide('slow',function(){
                        $('[data-path="'+$path+'"]').closest('.img-item').remove()
                    })
                    alert_toast("Image Successfully Deleted","success");
                }else{
                    console.log(resp)
                    alert_toast("An error occured while deleting an Image","error");
                }
                end_loader()
            }
        })
    }
    function upload_images(input,_this){
			start_loader();
            $.ajax({
				url:_base_url_+"classes/Master.php?f=upload_files",
				data: new FormData($('#cause-form')[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
                error:err=>{
					console.log(err)
					alert_toast("An error occured while uploadinf the images",'error');
					end_loader();
				},
                success:function(resp){
                    if(resp.status == 'success'){
                        $('[name="upload_code"]').val(resp.upload_code)
                        Object.keys(resp.images).map(k=>{
                            var el = $('#upload_clone>div').clone()
                            el.find('img').attr('src','<?php echo base_url ?>'+resp.images[k])
                            el.find('.upload_link').attr('href','<?php echo base_url ?>'+resp.images[k])
                            el.find('.upload_link').attr('alt',resp.images[k])
                            el.find('.upload_link').text('<?php echo base_url ?>'+resp.images[k])
                            el.find('.rem_img').attr('data-path',resp.images[k])
                            $('#uploaded-holder').append(el)
                        })
                    }else{
                        console.log(resp)
					    alert_toast("An error occured while uploadinf the images",'error');
                    }
					end_loader();
                }
            })
        }
        function rem_img(_this){
            _conf("Are sure to delete this image permanently?",'delete_img',["'"+_this.attr('data-path')+"'"])
        }
	$(document).ready(function(){
        
       
        $('.select2').select2({placeholder:"Please Select here",width:"relative"})
       
		$('#cause-form').submit(function(e){
			e.preventDefault();
            var _this = $(this)
			 $('.err-msg').remove();
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Master.php?f=save_cause",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
				success:function(resp){
					if(typeof resp =='object' && resp.status == 'success'){
						location.reload();
					}else if(resp.status == 'failed' && !!resp.msg){
                        var el = $('<div>')
                            el.addClass("alert alert-danger err-msg").text(resp.msg)
                            _this.prepend(el)
                            el.show('slow')
                            $("html, body").animate({ scrollTop: _this.closest('.card').offset().top }, "fast");
                            end_loader()
                    }else{
						alert_toast("An error occured",'error');
						end_loader();
                        console.log(resp)
					}
				}
			})
		})

        $('.summernote').summernote({
		        height: 500,
		        toolbar: [
		            [ 'style', [ 'style' ] ],
		            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
		            [ 'fontname', [ 'fontname' ] ],
		            [ 'fontsize', [ 'fontsize' ] ],
		            [ 'color', [ 'color' ] ],
		            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
		            [ 'table', [ 'table' ] ],
                    ['insert', ['picture','link']],
		            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
		        ]
		    })
	})
</script>