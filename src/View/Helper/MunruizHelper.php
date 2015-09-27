<?php
namespace App\View\Helper;

use Cake\View\Helper;

class MunruizHelper extends Helper
{
	public $helpers = ['Html', 'Form'];

	public function fecha()
	{
		return '
			<div class="container">
			    <div class="row">
			        <div class="col-sm-6">
	                    <input type="text" class="form-control" id="datetimepicker3" />
			        </div>
			        <script type="text/javascript">
			            $(function () {
			                $("#datetimepicker3").datetimepicker({
			                    format: "ES"
			                });
			            });
			        </script>
			    </div>
			</div>
		';
	}
}
