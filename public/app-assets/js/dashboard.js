$(document).ready(function () {
            $(".select2").change(function () { 
                var selectid = $(this).val();
                //alert(selectid);
                var html = '';
                if(selectid == 'Regular Workforce'){
                    html += '<div id="inputFormRow">';
                    html += '<div class="input-group " style="margin: 10px 0;">';
                        html += '<input type="text" name="rwf_officers_actual" class="form-control m-input" placeholder="officers" autocomplete="off">';
                    html += '</div>';
                    html += '<div class="input-group " style="margin: 10px 0;">';
                        html += '<input type="text" name="rwf_staff_actual" class="form-control m-input" placeholder="staff" autocomplete="off">';
                    html += '</div>';
                    html += '<div class="input-group " style="margin: 10px 0;">';
                        html += '<input type="text" name="rwf_contractors_actual" class="form-control m-input" placeholder="contractors" autocomplete="off">';
                    html += '</div>';
                html += '</div>';
                }
                else if(selectid == 'Hiring Target Achievement'){
                    html += '<div id="inputFormRow">';
                        html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="HTA_Execcutive" class="form-control m-input" placeholder="Execcutive" autocomplete="off">';
                        html += '</div>';
                        html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="HTA_staff" class="form-control m-input" placeholder="Staff" autocomplete="off">';
                        html += '</div>';
                    html += '</div>';
                }
                else if(selectid == 'CSR Target Achievement'){
                    html += '<div id="inputFormRow">';
                        html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="achievement_actual" class="form-control m-input" placeholder="actual" autocomplete="off">';
                        html += '</div>';
                         html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="achievement_target" class="form-control m-input" placeholder="target" autocomplete="off">';
                        html += '</div>';
                    html += '</div>';
                }else{
                    html += '<div id="inputFormRow">';
                        html += '<p style="margin-top: 12px;"> Traning Days </p>';
                        html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="TraningDays_actual" class="form-control m-input" placeholder="actual" autocomplete="off">';
                        html += '</div>';
                         html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="TraningDays_target" class="form-control m-input" placeholder="target" autocomplete="off">';
                        html += '</div>';

                        html += '<p> Participants </p>';
                        html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="Participants_actual" class="form-control m-input" placeholder="actual" autocomplete="off">';
                        html += '</div>';
                         html += '<div class="input-group " style="margin: 10px 0;">';
                            html += '<input type="text" name="Participants_target" class="form-control m-input" placeholder="target" autocomplete="off">';
                        html += '</div>';
                    html += '</div>';
                }
                

                $('#newRow').empty();
                $('#newRow').append(html);
   
            });
        });