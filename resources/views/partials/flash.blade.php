<div style="text-align: center; margin-bottom: 16px;">
	@if(@session('failed_login'))
	<div class="alert alert-danger" style="margin: 8px 42px; padding: 4px 16px; text-align: center;">
		{{ @session('failed_login') }}
	</div>
	@endif

	@if(@session('failed_submit'))
	<div class="alert alert-danger" style="margin: auto; padding: 4px 16px; text-align: center; display: inline-block;">
		{{ @session('failed_submit') }}
	</div>
	@endif

	@if(@session('success_submit'))
	<div class="alert alert-success" style="margin: auto; padding: 4px 16px; text-align: center; display: inline-block;">
		{{ @session('success_submit') }}
	</div>
	@endif
</div>