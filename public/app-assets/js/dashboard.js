$(document).ready(function () {
            $(".select2").change(function () { 
                var selectid = $(this).val();
                //alert(selectid);
                var html = '';
                if(selectid == 'RW'){
                    html += '<div id="inputFormRow">';
                    html += '<div class="input-group " style="margin: 10px 0;">';
                        html += '<input type="text" name="rwf[officers][actual]" class="form-control m-input" placeholder="officers" autocomplete="off">';
                    html += '</div>';
                    html += '<div class="input-group " style="margin: 10px 0;">';
                        html += '<input type="text" name="rwf[staff][actual]" class="form-control m-input" placeholder="staff" autocomplete="off">';
                    html += '</div>';
                    html += '<div class="input-group " style="margin: 10px 0;">';
                        html += '<input type="text" name="rwf[contractors][actual]" class="form-control m-input" placeholder="contractors" autocomplete="off">';
                    html += '</div>';
                html += '</div>';
                }
                else if(selectid == 'HTA'){
                    html += '<div id="inputFormRow">';
                        html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="HTA[Execcutive]" class="form-control m-input" placeholder="Execcutive" autocomplete="off">';
                        html += '</div>';
                        html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="HTA[staff]" class="form-control m-input" placeholder="Staff" autocomplete="off">';
                        html += '</div>';
                    html += '</div>';
                }
                else if(selectid == 'CSR'){
                    html += '<div id="inputFormRow">';
                        html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="achievement[actual]" class="form-control m-input" placeholder="actual" autocomplete="off">';
                        html += '</div>';
                         html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="achievement[target]" class="form-control m-input" placeholder="target" autocomplete="off">';
                        html += '</div>';
                    html += '</div>';
                }else{
                    html += '<div id="inputFormRow">';
                        html += '<p style="margin-top: 12px;"> Traning Days </p>';
                        html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="TraningDays[actual]" class="form-control m-input" placeholder="actual" autocomplete="off">';
                        html += '</div>';
                         html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="TraningDays[target]" class="form-control m-input" placeholder="target" autocomplete="off">';
                        html += '</div>';

                        html += '<p> Participants </p>';
                        html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="Participants[actual]" class="form-control m-input" placeholder="actual" autocomplete="off">';
                        html += '</div>';
                         html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="Participants[target]" class="form-control m-input" placeholder="target" autocomplete="off">';
                        html += '</div>';
                    html += '</div>';
                }
                

                $('#newRow').empty();
                $('#newRow').append(html);
   
            });
        });