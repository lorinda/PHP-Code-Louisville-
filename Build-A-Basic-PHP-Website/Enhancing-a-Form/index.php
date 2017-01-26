<?php 
$pageTitle = "Personal Media Library";
$section = null;
include("inc/header.php"); 
include("inc/data.php");
include("inc/functions.php");
?>


		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

				<ul class="items">
				    <?php
                        $random = array_rand($catalog, 4);
                        foreach($random as $id => $item){
                            echo get_item_html($id, $catalog[$item]);
                    }
                    ?>	
                </ul>

			</div>

		</div>

	
<?php include("inc/footer.php"); ?>