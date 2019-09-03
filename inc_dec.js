class IncDec{
	static incElement (incTarget, button, cloneTarget) {
		$(incTarget).on("click", button, function(event) {
			let clone = $(cloneTarget).clone(true);	
			clone.show();	
			$(event.target).parent().append(clone);
		});
	}
	static decElement (remTarget, button, depth) {
		$(remTarget).on("click", button, function(event) {
			if (depth == 2) {
				$(event.target).parent().parent().remove();
			}
			else if (depth == 3) {
				$(event.target).parent().parent().parent().remove();
			}
		});
	}
	static initialLoad(incTarget, cloneTarget) {
		let clone = $(cloneTarget).clone(true);	
		clone.show();	
		$(incTarget).append(clone);
	}
	static incMenuElement (incTarget, button, cloneTarget, nameNewId, cont, incMenuTarget, label) {
		$(incTarget).on("click", button, function(event) {
			console.log(cont);

			let new_id = nameNewId + cont;
			let clone = $(cloneTarget).clone(true,true);
			clone.attr("id", new_id);
			clone.show();
			$(event.target).parent().append(clone);
			$(incMenuTarget).append("<li class = " + new_id + "><a href=#" + new_id + " class='link'>" + label + "</a></li>");
			cont += 1;
		});
	}
	static decMenuElement (remTarget, button, depth, remMenuTarget) {
		$(remTarget).on("click", button, function(event) {
			let id = "";
			if (depth == 2) {
				$(event.target).parent().parent().remove();
				id = $(event.target).parent().parent().attr("id");
			}
			else if (depth == 3) {
				$(event.target).parent().parent().parent().remove();
				id = $(event.target).parent().parent().parent().attr("id");
			}
			//console.log(id);
			if (id != "") {
				$(remMenuTarget).find("." + id).remove();
			}
		});
	}
	static initialLoadMenu (incTarget, cloneTarget, nameNewId, incMenuTarget, label) {
		let new_id = nameNewId + '0';
		let clone = $(cloneTarget).clone(true,true);
		clone.attr("id", new_id);
		clone.show();
		$(incTarget).append(clone);
		$(incMenuTarget).append("<li class = " + new_id + "><a href=#" + new_id + " class='link'>" + label + "</a></li>");
	}
}