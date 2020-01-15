<form action="{{url('public/reportall/update/'. $report->report_id)}}" method="POST">
    {{ csrf_field() }}   
<h1 class="title">営業レポート編集</h1>
	<dl>
		<dt>氏名<span>MR Name</span></dt>
		<dd class="required"><input type="text" id="report_name" name="report_name" value="{{$report['report_name']}}" /></dd>
		
		<dt>訪問日<span>visit Date</span></dt>
		<dd class="required"><input type="text" id="report_date" name="report_date" value="{{$report['report_date']}" /></dd>

		<dt>病院名<span>Hospital name</span></dt>
		<dd><input type="text" id="report_hospital" name="report_hospital" value="{{$report['report_hospital']}}" /> </dd>
		
		<dt>診療科名<span>Department</span></dt>
		<dd><input type="text" id="report_department" name="report_department" value="{{$report['report_department']}}" /> </dd>

		<dt>製品名<span>Product</span></dt>
		<dd class="required"><input type="text" id="report_product" name="report_product" value="{{$report['report_product']}}" /></dd>
		
		<dt>取得コメント<span>Comments</span></dt>
		<dd class="required"><input type="text" id="report_comment" name="report_comment" value="{{$report['report_comment']}}" /></dd>

		<dt>販売数<span>sales quantities</span></dt>
		<dd><input type="text" id="report_salesnumber" name="report_salesnumber" value="{{$report['report_salesnumber']}}" /></dd>
		
		<dt>販売単価<span>unit price</span></dt>
		<dd><input type="text" id="report_salesprice" name="report_salesprice" value="{{$report['report_salesprice']}}" /></dd>
	    </dd>
	</dl>
	
   <!-- id値を送信 -->
    <input type="hidden" name="report_id" value="{{$report['report_id']}}">	
    <p id="form_submit"><input type="submit" id="form_submit_button" value="保存 Save" /></p>
    <a class="btn btn-link pull-right" href="">
    戻る
    </a>


</form>

