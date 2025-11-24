
<div id="data-protect" class="modal fade" data-backdrop="true" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-bottom">
        <div class="modal-content no-radius">
            <div class="modal-header">
                <div class="modal-title text-md">Protectia datelor</div>
                <button class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="p-4 text-center scrollable">
                <p>Vom încerca să răspundem solicitărilor în termen de 30 de zile sau mai repede, în funcție de diferite aspecte tehnice ale solicitării, complexitatea cererii sau alte aspecte precum numărul mare de cereri primite sau imposibilitatea de a identifica utilizatorul într-un termen util.</p>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Inchide</button>
                <a href="mailto:gdpr@europeanworkpower.de" class="btn btn-primary">Contacteaza</a>
            </div>
        </div>
    </div>
</div>

<div id="footer" class="page-footer">
            <div class="d-flex p-3"><span class="text-sm text-muted flex">&copy; Copyright European Work Power</span>
                <div class="text-sm text-muted"><a href="https://jivate.com/">Dezvoltat de Jivate</a></div>
            </div>
        </div>
    </div>
    <script src="<?php echo $jivate_assets; ?>assets/js/site.js"></script>
    <script>
        //$(".wishlist").live("click", function() {
      /*  $(document).on("click", ".wishlist", function(event) {
            console.log($(this).closest("div.list-item").attr("data-id"));
            var suggestion_id = $(this).closest("div.list-item").attr("data-id");
            var elements = $(this).closest("div.list-item").clone();

            if ($(this).hasClass("active")) {
                console.log("active");
                $.ajax({
                    url: "https://mcgp.europeanworkpower.com/update/wishlist/"+suggestion_id+"/0/",
                    type: 'GET',
                    success: function(res) {

                    }
                });



                if(!($(this).closest("div.list-item").hasClass("nomove"))){
                    $(this).closest("div.list-item").remove();
                    $('#nonwishlisted').append(elements);

                }else{
                    $(this).removeClass("active");
                    $("#wishlisted").find(elements).remove();
                }


                if($("#wishlisted > div").length < 1){
                    $('#wishlisted').append('<div class="list-item nothinghere"><div><span style="background: #7474BF;background: -webkit-linear-gradient(to right, #348AC7, #7474BF);background: linear-gradient(to right, #348AC7, #7474BF);color: white" class="w-40 avatar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg></span></div><div class="flex"><a class="item-author text-color" style="pointer-events: none;cursor: default;">Momentan nu ai joburi de care esti interesat</a></div></div>');
                }

                if(!$("#nonwishlisted").find('.nothinghere').length){
                    $('#nonwishlisted').find(".nothinghere").remove();
                }

            }else{
                elements.find(".wishlist").addClass("active");
                $.ajax({
                    url: "https://mcgp.europeanworkpower.com/update/wishlist/"+suggestion_id+"/1/",
                    type: 'GET',
                    success: function(res) {
                    }
                });

                if(!($(this).closest("div.list-item").hasClass("nomove"))){
                    $(this).closest("div.list-item").remove();
                }else{
                    $(this).addClass("active");
                    $("#wishlisted").find(elements).remove();
                }

                $('#wishlisted').append(elements);


                if($("#nonwishlisted > div").length < 1){
                    $('#nonwishlisted').append('<div class="list-item nothinghere"><div><span style="background: #7474BF;background: -webkit-linear-gradient(to right, #348AC7, #7474BF);background: linear-gradient(to right, #348AC7, #7474BF);color: white" class="w-40 avatar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg></span></div><div class="flex"><a class="item-author text-color" style="pointer-events: none;cursor: default;">Momentan nu ai joburi de care esti interesat</a></div></div>');
                }

                if($("#wishlisted").find('.nothinghere').length){
                    $('#wishlisted').find(".nothinghere").remove();
                }
            }

        });  */


        $(document).on("click", ".wishlist", function(event) {
            var status = $(this).closest(".list-item").attr("data-added");
            var target = $(this).closest(".list-item").attr("data-target");
            var move = $(this).closest(".list-item").attr("data-move");
            var id = $(this).closest(".list-item").attr("data-id");

            if(status==0){

                $(this).closest(".list-item").attr("data-added", "1");

                $(this).addClass("active");

                $.ajax({
                    url: "https://mcgp.europeanworkpower.com/update/wishlist/"+id+"/1/",
                    type: 'GET',
                    success: function(res) {
                    }
                });

                if(move==0){
                    $("#wishlisted").append($(this).closest(".list-item").clone());
                }

                if($("#wishlisted > div").length < 1){
                    //$('#wishlisted').append('<div class="list-item nothinghere"><div><span style="background: #7474BF;background: -webkit-linear-gradient(to right, #348AC7, #7474BF);background: linear-gradient(to right, #348AC7, #7474BF);color: white" class="w-40 avatar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg></span></div><div class="flex"><a class="item-author text-color" style="pointer-events: none;cursor: default;">Momentan nu ai joburi de care esti interesat</a></div></div>');
                }

                if(!$("#nonwishlisted").find('.nothinghere').length){
                    $('#nonwishlisted').find(".nothinghere").remove();
                }

                if($("#wishlisted").find('.nothinghere').length){
                    $('#wishlisted').find(".nothinghere").remove();
                }

            }else{

                //$(this).closest(".list-item").attr("data-added", "0");

                //$(this).removeClass("active");

                //$(".list-item[data-id='"+id+"']").removeClass("active");

                $(".list-item[data-id='"+id+"']").each(function() {
                    $( this ).find(".wishlist").removeClass("active");
                    $(this).attr("data-added", "0");
                });



                $.ajax({
                    url: "https://mcgp.europeanworkpower.com/update/wishlist/"+id+"/0/",
                    type: 'GET',
                    success: function(res) {
                    }
                });

                if(move==0){
                    $("#wishlisted").find(".list-item[data-id='"+id+"']").remove();
                }

                if($("#nonwishlisted > div").length < 1){
                    $('#nonwishlisted').append('<div class="list-item nothinghere"><div><span style="background: #7474BF;background: -webkit-linear-gradient(to right, #348AC7, #7474BF);background: linear-gradient(to right, #348AC7, #7474BF);color: white" class="w-40 avatar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg></span></div><div class="flex"><a class="item-author text-color" style="pointer-events: none;cursor: default;">Momentan nu ai joburi de care esti interesat</a></div></div>');
                }

                if(!$("#wishlisted").children().length){
                    jQuery(document).ready(function(){
                        jQuery('#wishlisted').append('<div class="list-item nothinghere"><div><span style="background: #7474BF;background: -webkit-linear-gradient(to right, #348AC7, #7474BF);background: linear-gradient(to right, #348AC7, #7474BF);color: white" class="w-40 avatar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg></span></div><div class="flex"><a class="item-author text-color" style="pointer-events: none;cursor: default;">Momentan nu ai joburi de care esti interesat</a></div></div>');
                    });
                }

                if($("#wishlisted").find('.nothinghere').length){
                    $('#wishlisted').find(".nothinghere").remove();
                }

                if(!$("#nonwishlisted").find('.nothinghere').length){
                    $('#nonwishlisted').find(".nothinghere").remove();
                }

            }
            console.log($("#wishlisted > div").length);
            console.log("Status: "+status+"| Target: "+target+"| Move: "+move+"| ID: "+id);


        });

        $(document).on("click", ".offer", function(event) {
            var suggestion_id = $(this).closest("div.list-item").attr("data-id");

            location.href = "https://mcgp.europeanworkpower.com/details/"+suggestion_id;


        });


        $(document).on("click", ".goto", function(event) {
            var suggestion_id = $(this).closest("div.list-item").attr("data-href");

            location.href = $(this).closest("div.list-item").attr("data-href");


        });


        $(document).on("click", ".interest", function(event) {
            var suggestion_id = $(this).attr("data-id");
            var interest = $(this).attr("data-interest");
            var where = $(this).attr("data-where");
            if (interest=="interested") {
                $.ajax({
                    url: "https://mcgp.europeanworkpower.com/update/interest/"+where+'/'+suggestion_id+"/1/",
                    type: 'GET',
                    success: function(res) {
                    }
                });

                $("#feedback").empty();
                $("#feedback").append('<h5 class="card-title">Ai transmis ca esti interesat! Te-ai razgandit intre timp?</h5><a data-interest="notinterested" style="margin:10px" class="btn bg-danger-lt interest" data-id="'+suggestion_id+'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-down" style="margin-right: 10px;"><path d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"></path></svg> Nu mai sunt interesat</a>');

            }else if (interest=="notinterested"){
                $.ajax({
                    url: "https://mcgp.europeanworkpower.com/update/interest/"+where+'/'+suggestion_id+"/0/",
                    type: 'GET',
                    success: function(res) {
                    }
                });
                $("#feedback").empty();
                $("#feedback").append('<h5 class="card-title">Ai transmis ca nu esti interesat! Te-ai razgandit intre timp?</h5><a data-interest="interested" style="margin:10px" class="btn bg-success-lt interest" data-id="'+suggestion_id+'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up" style="margin-right: 10px;"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> Sunt interesat</a>');
            }


        });


        </script>




</body>

</html>
