jQuery(document).ready(function(){
      alCatagorysShow();
    //add data show
    function alCatagorysShow(){
        $.ajax({
            type:'get',
            url:'view',
            dataType:'json',
            success:function (response){
                jQuery('#tbody').html('');
                $.each(response.addData,function(key,item){
                    if(item.categoryStatus=="1"){
                        var status='<span class="badge badge-info">Active</span>';
                    }
                    else{
                        var status='<span class="badge badge-warning">InActive</span>';
                    }
                    jQuery('#tbody').append('\
                    <tr>\
                        <td>'+item.catagoryName+'</td>\
                        <td>'+item.categoryDrescreption+'</td>\
                        <td>'+item.catagoryTag+'</td>\
                        <td>'+status+'</td>\
                        <td><button  data-toggle="modal" data-target="#updateCategory" class="categiryEdit btn btn-sm btn-info" value="'+item.id+'"><i class="fas fa-edit"></i></button> \
                        <button data-toggle="modal" data-target="#deleteModal" class="btn btn-sm btn-danger CategoryDelete" id="CategoryDelete" value="'+item.id+'"><i class="fas fa-trash"></i></button>\
                        </td>\
                     </tr>');
                 });
            }
        });
    }


    jQuery('#CategorySave').click(function(){
        //for generate csrf tocken
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var catagoryName= jQuery('#catagoryName').val();
        var categoryDrescreption= jQuery('#categoryDrescreption').val();
        var catagoryTag= jQuery('#catagoryTag').val();
        var categoryStatus= jQuery('#categoryStatus').val();
        $.ajax({
            type: "post",
            url: "add",
            data: {
                'catagoryName':catagoryName,
                'categoryDrescreption':categoryDrescreption,
                'catagoryTag':catagoryTag,
                'categoryStatus':categoryStatus,
            },
            dataType: "json",
            success: function (response) {
                if(response.erroestatus=="400"){
                    jQuery('.categoryNameerror').text(response.errors.catagoryName);
                    jQuery('.categoryDredcreptionerror').text(response.errors.catagoryName);
                    jQuery('.categoryTagerror').text(response.errors.catagoryName);
                }
                else{
                    jQuery('.message').append('<div class="alert alert-success">Catagories Added</div>');
                    alCatagorysShow();
                    jQuery('.message').fadeOut(6000);
                    jQuery('#addCatagori').modal('hide').fadeOut(100);
                    jQuery('#addCatagori').find('input').val('');
                    jQuery('#addCatagori').find('textArea').val('');
                    
                    
                    
                    
                }
               
            }
        });
    });

    //category edit

    // jQuery('.categirtEdit ').click(function(){
    //     alert('hellowdear');
    // });
    jQuery(document).on('click','.categiryEdit',function(e){
        e.preventDefault();
        var catEditid= jQuery(this).val();
       $.ajax({
           url: 'editcategory/'+catEditid,
           type:'get',
           dataType: 'json',
           success: function(response){
               if(response.status=='400'){
                   jQuery('.errorMessage').append('<div class="alert alert-success">Catagories not Found</div>');
               }
               else{
                 jQuery('#updatecatagoryName').val(response.alldata.catagoryName);
                 jQuery('#updatecategoryDrescreption').val(response.alldata.categoryDrescreption);
                 jQuery('#updatecatagoryTag').val(response.alldata.catagoryTag);
                 jQuery('#showstatus').val(response.alldata.categoryStatus);
                 jQuery('#id').val(response.alldata.id);


                //    var checkStatus = response.alldata.categoryStatus;

                //    if(checkStatus === 1){
                //        jQuery('#showstatus').text(" Active");
                //    }
                //    else{
                //     jQuery('#showstatus').text(" in Active");
                    
                        
                //    }
                 
                
               }
           }


       });


    });

    //for update category
      jQuery('#Categoryupdate').click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
           });

         var updatecatagoryName= jQuery('#updatecatagoryName').val();
         var updatecategoryDrescreption= jQuery('#updatecategoryDrescreption').val();
         var updatecatagoryTag= jQuery('#updatecatagoryTag').val();
         var updatecategoryStatus= jQuery('#showstatus').val();
         var categoryId = jQuery('#id').val();
          
        $.ajax({
            
           url: 'update/'+categoryId,
           type:'post',
           dataType: 'json',
           data: {
                'updatecatagoryName': updatecatagoryName,
                'updatecategoryDrescreption': updatecategoryDrescreption,
                'updatecatagoryTag': updatecatagoryTag,
                'updatecategoryStatus': updatecategoryStatus,
                'categoryId':categoryId,
           },
           success: function(response){
               if(response.status == "400"){
                   jQuery('.updatecategoryNameerror').text(response.errormessage.UpdatecatagoryName);
                 }
               else{
                 jQuery('.message').append('<div class="alert alert-success">'+response.updatesuccess+'</div>');
                 jQuery('.message').fadeOut(5000);
                 jQuery('#updateCategory').modal('hide');
                 alCatagorysShow();

                
               }

           }


          });
      });
      

      jQuery(document).on('click','.CategoryDelete',function(e){
         e.preventDefault();
         var categoryId = jQuery(this).val();
         var deleteId = jQuery('#deleteId').val(categoryId);
         });
     jQuery('#confirmDelete').click(function(){
        var deleteId = jQuery('#deleteId').val();
        $.ajax({
                   url:'delete/'+deleteId,
                   type:'get',
                   dataType:'json',
                   success: function(response){
                   jQuery('.message').append('<div class="alert alert-danger">'+response.message+'</div>');
                   jQuery('#deleteModal').modal('hide');
                   jQuery('.message').fadeOut(5000);
                   alCatagorysShow();
                   

                  }
              });
         
     });
    

    
   
});