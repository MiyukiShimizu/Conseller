<form action="/store/" method="POST">
{{ csrf_field() }}
<dt>タイトル<span>Company Name</span></dt>
		<dd><input type="text" id="company_name" name="title" value="" /></dd>
		
		<dt>内容<span>Name</span></dt>
        <dd class="required"><input type="text" id="your_name" name="content" value="" /></dd>
    

    <p id="form_submit"><input type="submit" id="form_submit_button" value="送信 Send" /></p>

</form>