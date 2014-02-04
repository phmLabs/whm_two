<style>
        #addLink input {
                margin: 0;
                height: 30px;
                width: 440px;
        }

        #addLink select {
        	width: 440px;
        }

        #addLink label {
            font-size: 14px;
            font-weight: bold;
        }

        #addLink {
           width:450px;
           left:50%;
           top: 100px;
           margin-left:-225px;
           position:fixed;
           z-index: 2;
           background-color: white;
           padding: 20px;
           border: 3px solid #e30083;
          display: none;
        }

        #addLinkSuccess {
           display: none;
           width:250px;
           left:50%;
           top: 200px;
           margin-left:-125px;
           position:fixed;
           z-index: 3;
           background-color: white;
           padding: 20px;
           border: 3px solid #e30083;
        }

        #addLink p {
        	font-size: 12px;
        }
</style>

<script>

function resetForm(id) {
	$('#'+id).each(function(){
	        this.reset();
	});
}

function suggestLink( )
{
	// Using the core $.ajax() method
	$.ajax({
	    // the URL for the request
	    url: "/wp-content/plugins/suggest-a-link/suggestLink.php",

	    // the data to send (will be converted to a query string)
	    data: $("#suggestLinkForm").serialize(),

	    // whether this is a POST or GET request
	    type: "POST",

	    // the type of data we expect back
	    dataType : "json",

	    // code to run if the request succeeds;
	    // the response is passed to the function
	    success: function( json ) {
	        $("#addLink").hide();
	        $("#addLinkSuccess").show();
	        resetForm("suggestLinkForm");
	    },

	    // code to run if the request fails; the raw request and
	    // status codes are passed to the function
	    error: function( xhr, status ) {
	        alert( "Sorry, there was a problem!" );
	    }
	});
}

function showLinkSuggestBox( )
{
	$("#addLink").show();
}

</script>

<div id="addLink">
  <h2>Link vorschlagen.</h2>
  <p>
    Danke, dass du einen Link hinzuf&uuml;gen m&ouml;chtest. Sobald du dieses Formular ausgef&uuml;llt hast, wird einer unserer Moderatoren
    informiert, der sofort losrennt und den Link &uuml;berpr&uuml;ft. Falls er ihn gefal&auml;llt - und davon gehen wir aus - wird er mit ins Programm genommen.
    Da wir die Leser des Blogs nicht mit tollen Links &uuml;berlasten wollen, kann es aber sein, dass dein Link erst nach ein paar Tagen live geht.
  </p>

  <form id="suggestLinkForm">
    <label>Url</label><input type="text" name="post[url]"><br/>
    <label>Titel</label><input type="text" name="post[title]"><br/>

    <?php $categories = get_categories(); ?>
    <label>Kategorie</label>
    <select name="post[category]">
      <?php foreach( $categories as $category ): ?>
        <option value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></option>
    <?php endforeach; ?>
    </select>
    <label>Dein Name</label><input type="text" name="post[submitter]">
  </form>

  <a href="#" onclick="suggestLink()"><span class="btn btn-small">Vorschlag absenden</span></a>
  <a href="#" onclick='$("#addLink").hide();'><span class="btn btn-small">Abbrechen</span></a>
</div>

<div id="addLinkSuccess">
  <h2>Link erfolgreich vorgeschlagen.</h2>
  <p>Vielen Dank, dass du einen Link vorgeschlagen hast. Wir werden ihn sobald wie m&ouml;glich pr&uuml;fen.
  <a href="#" onclick='$("#addLinkSuccess").hide();'><span class="btn btn-small">Schlie&szlig;en</span></a>
</div>