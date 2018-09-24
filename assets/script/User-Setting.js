    var save_method; //for save method string
    var table;
    var base_url = 'http://localhost/ProfShop/';

        function edit_user(id)
        {
            save_method = 'update';
            $('#form')[0].reset(); // reset form on modals
            $('.form-group').removeClass('has-error'); // clear error class
            $('.help-block').empty(); // clear error string


            //Ajax Load data from ajax
            $.ajax({
                url : base_url+'Controller_Set_User/User_setting_data/'+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {

                    $('[name="id"]').val(data.id);
                    $('[name="username"]').val(data.username);
                    $('[name="password"]').val(data.password);
                    $('#modal_form').modal({

                                keyboard: true, 
                                show: true
                        }); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Pengaturan akun'); // Set title to Bootstrap modal title

                    $('#photo-preview').show(); // show photo preview modal


                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Melakukan Proses');
                }
            });
        }


        function save_update()
        {
            $('#btnSave').text('saving...'); //change button text
            $('#btnSave').attr('disabled',true); //set button disable 
            var url;

            url = base_url+'Controller_Set_User/User_update';

            // ajax adding data to database

            var formData = new FormData($('#form')[0]);
            $.ajax({
                url : url,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(data)
                {

                    if(data.status) //if success close modal and reload ajax table
                    {
                        $('#modal_form').modal('hide');
                        location.href = base_url+'Controller_Masuk/keluar';
                    }
                    else
                    {
                        for (var i = 0; i < data.inputerror.length; i++) 
                        {
                            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                            $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                        }
                    }
                    $('#btnSave').attr('disabled',false); //set button enable 


                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Melakukan Proses');
                    $('#btnSave').attr('disabled',false); //set button enable 

                }
            });
        }