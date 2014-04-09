var template = 	"<h2>Datei hochladen</h2>" + 
				"<input type='file' class='upload' id='uploadFile' onchange='uploadFile()'>";

function showUploadDialog(){

	//Show the dialog
	$('#myModal').modal('show');
}

function closeDialog(){
	$('#myModal').modal('hide');
}

function uploadFile(data){

	$.ajax({
	   type: 'POST',
       url: 'backend/fupload.php',
       data: data,
       processData: false,
       contentType: false,
       success: function() { 
       		alert("File uploaded");
       }
    });

}

function getFileName(id){

}

function downloadFile(id){
	alert(id);
	alert("downloaded");
}

function deleteFile(id){

	if(confirm("Wollen sie die Datei wirklich löschen?")){
		alert("gelöscht");	
	}else{

	}
	
}