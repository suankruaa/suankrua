<input id="mem_name">


<script src="asset/js/jquery-1.11.1.min.js" type="text/javascript"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
	$(function(){
	 var availableTags = [
	      "ActionScript",
	      "AppleScript",
	      "Asp",
	      "BASIC",
	      "C",
	      "C++",
	      "Clojure",
	      "COBOL",
	      "ColdFusion",
	      "Erlang",
	      "Fortran",
	      "Groovy",
	      "Haskell",
	      "Java",
	      "JavaScript",
	      "Lisp",
	      "Perl",
	      "PHP",
	      "Python",
	      "Ruby",
	      "Scala",
	      "Scheme"
	    ];
	    
	    $("#mem_name").autocomplete({
	      source: availableTags
	    });


		$("#fak").keyup(function(){
			$("#fak_total_new").val(parseFloat($(this).val()) + parseFloat($("#fak_total").val()));
		});
	});
</script>