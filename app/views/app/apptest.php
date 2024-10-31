
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h1><?php echo $title ?></h1>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-8">
					<div class="search-field">
						<input type="text" class="form-control" name="search_key" id="search_key" placeholder="Search by product name" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="search-button">
						<button type="button" id="searchBtn" class="btn btn-info">Search</button>
						<button type="button" id="resetBtn" class="btn btn-warning">Reset</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div id="ajaxContent"></div>
		</div>
	</div>
</div>

<script src="<?= base_url('assets/plugins/pdfobject/jquery-3.7.1.min.js') ?>"></script>

<script>
    $(function() {

        /*--first time load--*/
        ajaxlist(page_url = false);

        /*-- Search keyword--*/
        $(document).on('click', "#searchBtn", function(event) {
            ajaxlist(page_url = false);
            event.preventDefault();
        });

        /*-- Reset Search--*/
        $(document).on('click', "#resetBtn", function(event) {
            $("#search_key").val('');
            ajaxlist(page_url = false);
            event.preventDefault();
        });

        /*-- Page click --*/
        $(document).on('click', ".pagination li a", function(event) {
            var page_url = $(this).attr('href');
            ajaxlist(page_url);
            event.preventDefault();
        });

        /*-- create function ajaxlist --*/
        function ajaxlist(page_url = false) {
            var search_key = $("#search_key").val();

            var dataString = 'search_key=' + search_key;
            var base_url = '<?php echo site_url('/examplecontroller/index_ajax/') ?>';

            if (page_url == false) {
                var page_url = base_url;
            }

            $.ajax({
                type: "POST",
                url: page_url,
                data: dataString,
                success: function(response) {
                    console.log(response);
                    $("#ajaxContent").html(response);
                }
            });
        }
    });
</script>
