// Add your custom scripts here

console.log("Good luck 👌");

console.log("Let's start...");

function sendReq(rowId) {
	const xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			location.reload();
		}
	};
	xhttp.open("GET", "/partials/delete.php?rowid=" + rowId, true); // it would be better to use simply POST instead of GET
	xhttp.send();
}

function deleteRow(btn) {
	var row = btn.parentNode.parentNode;
	var rowId = row.id;
	row.parentNode.removeChild(row);
	sendReq(rowId);
}

var buttons = document.querySelectorAll(".removeItemBtn"); //we can use modern variables const instead of var, depends on the necessary browser support
[].forEach.call(buttons, function (btn) {
	btn.addEventListener("click", function (e) {
		e.preventDefault();
		deleteRow(this);
	});
});

console.log(
	"Of course, we can use here, for example, libraries like jQuery or Redux (for dataset) or even React..."
);
