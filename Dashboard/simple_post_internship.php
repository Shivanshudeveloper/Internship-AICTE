<?php 
  include './includes/header.inc.php';
?>
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
 
 
 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>



 <link rel="stylesheet" href="css/bootstrap-multiselect/bootstrap-multiselect.css" type="text/css">

 <script type="text/javascript" src="js/bootstrap-multiselect/bootstrap-multiselect.js"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-10">
                    <h1>Welcome < Municipality Name>,Ministry of Housing And Urban Affairs</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="mt-2 mb-2">
            <?php include './includes/msg.inc.php' ?>
        </div>
        <!-- Default box -->
        <div class="card-body">
            <!-- /.card-header -->
            <!-- form start -->

            <form action="./src/php/main.php" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Internship Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Internship Role</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Internship Description(Task/Function)</label>
                        <textarea name="description" id="desciption" cols="15" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Department</label>
                            <div class="form-group">
                                <select id="multi-select-demo"style="width: 100%;">
                                    <option value="Urban planning including town planning">Urban planning including town planning</option>

                                    <option value="Regulation of land use and construction of buildings. ">Regulation of land use and construction of buildings.</option>

                                    <option value="Planning for economic and social development. ">Planning for economic and social development. </option>

                                    <option value="Roads and bridges. ">Roads and bridges. </option>

                                    <option value="Water supply for domestic, industrial and commercial purposes">Water supply for domestic, industrial and commercial purposes</option>
                                    <option value="Water supply for domestic, industrial and commercial purposes">Water supply for domestic, industrial and commercial purposes</option>
                                    <option value="Water supply for domestic, industrial and commercial purposes">Water supply for domestic, industrial and commercial purposes</option>
                                    <option value="Water supply for domestic, industrial and commercial purposes">Water supply for domestic, industrial and commercial purposes</option>

                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <label>Qualification</label>
                            <div class="form-group">
                                <select class="select2" data-placeholder="Select a State" style="width: 100%;">
                                    <option value="B. TECH">B. TECH</option>
                                    <option value="B.PLAN">B.PLAN</option>
                                    <option value="BSW">BSW</option>
                                    <option value="BA">BA</option>
                                    <option value="BA">BA</option>
                                    <option value="BA">BA</option>
                                    <option value="BA">BA</option>

                                </select>
                            </div>
                        </div>
                        <div class="col">
                        <label>Specialisation</label>
                            <div class="form-group">
                                <select class="select2" data-placeholder="Select a State" style="width: 100%;">
                                    <option value="CIVIL">CIVIL</option>
                                    <option value="IT">IT</option>
                                    <option value="MECHANICAL">MECHANICAL</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" id="locations" name="locations"
                                    placeholder="Delhi, Lucknow, Mumbai">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Eligibility Conditions</label>
                                <textarea name="" id="" cols="30" rows="3">1.	Open only to Indian students 
2.	Not more than 14 months should have passed from the date of graduation to the date from which the internship is sought
3.	The qualifications may be relaxed in special category cases with prior permission of Urban Local Body.

                                            </textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Terms of Engagement</label>
                                <textarea name="" id="" cols="30" rows="3">Terms of Engagement	•	The intern will be required to submit a digital undertaking specified under Annexure A to the Urban Local Body certifying his credentials, professional conduct and character before the commencement of the internship.
•	The interns will be tasked with projects under the indicative Roles defined under Annexure B at the discretion of the Urban Local Body.
•	The intern will be eligible for an internship certificate only upon completion of the internship period and internship projects, which may be relaxed as per the discretion of the Urban Local Body under special circumstances.
•	The interns shall be required to maintain confidentiality of all the documents/reports or any information received by him/her during his/her internship period. The interns shall not reveal to any person or organisation any information relating to the Urban Local Body, its work and policies. The interns may also be required to sign a confidentiality agreement as per Annexure C prior to the commencement of the internship.
•	Notice period of 4 weeks will have to be given prior to leaving the internship. 
•	It is neither a job nor assurance for a job in the Urban Local Body.

                                            </textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Logistics</label>
                                <textarea name="" id="" cols="30" rows="3">Logistics 	Interns shall bring the laptop and mobile internet connectivity with them. They shall not be entitled to any emoluments/ allowances whatsoever. They shall arrange their own transport to and from office. 

The ULB may support the interns with resources for completion of the assignment as per its discretion.

                                            </textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Guidelines</label>
                                <textarea name="" id="" cols="30" rows="3">Revision of the Guidelines	The Ministry may review and revise the guidelines as per its discretion. 
                                            </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Stipend And Allowance</label>
                            <input type="number" class="form-control" id="stipend" name="stipend" placeholder="10000">
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Duration</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Duration">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone No.">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="phone" name="phone" placeholder="Email@example.com">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <center>
                            <button type="submit" name="internship_post" class="btn btn-primary">Submit</button>
                            <button type="submit" name="internship_post" class="btn btn-primary"
                                style="margin-left:10px">Reset</button>
                        </center>
                    </div>
            </form>
        </div>


</div>

</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
                    .endOf('month')
                ]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        },
        function(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
        format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

})
</script>
<script type="text/javascript">
 
    $(document).ready(function() {
 
        $('#multi-select-demo').multiselect();
 
    });
 
</script>

<?php include './includes/footer.inc.php' ?>