var save_method; //for save method string
    var table;
    var base_url = 'http://localhost/ProfShop/';

    function add_user()
    {
        save_method = 'add';
        $('#form_user')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_form_add').modal({
                            backdrop: 'static',
                            keyboard: true, 
                            show: true
                    }); // show bootstrap modal
        $('.modal-title').text('Tambah User'); // Set Title to Bootstrap modal title

    }
        
    function save_user()
        {
            $('#btnSave').text('saving...'); //change button text
            $('#btnSave').attr('disabled',true); //set button disable 
            var url;

            if(save_method == 'add') {
                url = base_url+'Controller_User/User_Simpan';
            } else {
                url = base_url+'Controller_User/User_update_data';
            }

            // ajax adding data to database

            var formData = new FormData($('#form_user')[0]);
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
                        $('#modal_form_add').modal('hide');
                        alert('Data Berhasil Diproses');
                        location.href = base_url+'b6cdac2ab744696e170350fe2e6f979f';
                        
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
        
        function delete_user(id)
        {

            if(confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?'))
            {
                // ajax delete data to database
                $.ajax({
                    url : base_url+'Controller_User/User_Hapus/'+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        //if success reload ajax table
                        $('#modal_form').modal('hide');
                        alert('Data Berhasil Dihapus');
                        location.href = base_url+'b6cdac2ab744696e170350fe2e6f979f';
                       
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Gagal Melakukan Proses');
                    }
                });

            }
        }

        function edit_data_user(id)
        {
            save_method = 'update';
            $('#form_user')[0].reset(); // reset form on modals
            $('.form-group').removeClass('has-error'); // clear error class
            $('.help-block').empty(); // clear error string


            //Ajax Load data from ajax
            $.ajax({
                url : base_url+'Controller_User/edit_user/'+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {

                    $('[name="id"]').val(data.id);
                    $('[name="nama_user"]').val(data.nama_user);
                    $('[name="jabatan"]').val(data.jabatan);
                    $('[name="username"]').val(data.username);
                    $('[name="password"]').val(data.password);
                    $('#modal_form_add').modal({

                                keyboard: true, 
                                show: true
                        }); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Ubah User'); // Set title to Bootstrap modal title

                    $('#photo-preview').show(); // show photo preview modal


                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Melakukan Proses');
                }
            });
        }

       