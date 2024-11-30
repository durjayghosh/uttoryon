<?php 

					$msg =$this->uri->segment(3);
					if ($msg=='error') {
						echo '<div id="prefix_1341577821759" class="Metronic-alerts alert alert-danger fade in">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
					Validation Error!!!</div>';
					}

					if ($msg=='success') {
						echo '<div id="prefix_1341577821759" class="Metronic-alerts alert alert-success fade in">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
					Operation Success!!!</div>';
					}

					if ($msg=='del_success') {
						echo '<div id="prefix_1341577821759" class="Metronic-alerts alert alert-success fade in">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
					Delete Operation Success!!!</div>';
					}

					if ($msg=='cp_error') {
						echo '<div id="prefix_1341577821759" class="Metronic-alerts alert alert-danger fade in">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
					Change Failed!!!.... Current Password is WRONG!!!</div>';
					}

					if ($msg=='np_error') {
						echo '<div id="prefix_1341577821759" class="Metronic-alerts alert alert-danger fade in">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
					Change Failed!!!.... New Password Cannot Be same as Current Password!!!</div>';
					}



					 ?>