var incr_y = 10;
var incr_x = 10;

$(document).ready(function(){
	$("#NEW").click(new_game);
	$("#ADDS").click(add_ship);
	$("#ADDB").click(add_block);
	$("#NEXTS").click(next_ship);
	$("#MOVE").click(move);
	$("#LEFT").click(left);
	$("#RIGTH").click(rigth);
	$("#SHOOT").click(shoot);
	$("#NEXTP").click(next_player);
	$("#CHEAT").click(cheat);
});

setInterval(parse_json, 500);

function parse_json() {
	$.ajax({
		url: '../game_api.php',
		type: 'post',
		data: {'command': 'board'},
		success: function(data) { update_game(data) }
	});
}

function update_game(game_data) {
	game_data.ship.forEach(el => update_ship(el));
	game_data.blocks.forEach(el => place_obstacles(el));
	console.log(game_data);
	if ("bullets" in game_data)
		game_data.bullets.forEach(el => place_bullets(el));
	else
		$("#board .bullets").remove();
}

function update_ship(ship_item) {
	let obj = $("#" + ship_item.ship_id);
	if (obj.length == 0)
	{
		obj = $('<div id="' + ship_item.ship_id + '" class="ships"><img src="./imgs/2.1.png" alt="Firestorm"><div class="health"><p id="h_line"></p></div></div>');
		$("#board").append(obj);
	}
	obj.css({"left": (ship_item.pos_x*incr_x) + 'px', "top": (ship_item.pos_y*incr_y) + 'px'});
	$("#" + ship_item.ship_id + " .health" + " #h_line").css({"width": (ship_item.health + "%")});
	$("#" + ship_item.ship_id + " img").css({"transform": "rotate(" + (ship_item.angle * 90) + "deg)"});
	if (ship_item.is_select == true) {
		obj.css({"border": "4px solid lightgreen"});
	}
	else {
		obj.css({"border": "none"});
	}
//	console.log(ship_item);
}

function place_obstacles(block_item) {
	let obj = $("#" + block_item.block_id);
	if (obj.length == 0)
	{
		obj = $('<div id="' + block_item.block_id + '" class="blocks"><img src="./imgs/block1.png" alt=""></div>');
		$("#board").append(obj);
	}
	obj.css({"left": (block_item.pos_x*incr_x) + 'px', "top": (block_item.pos_y*incr_y) + 'px'});
//	console.log(block_item);
}

function place_bullets(bull_item) {
	let obj = $("#" + bull_item.bullet_id);
	if (obj.length == 0)
	{
		obj = $('<div id="' + bull_item.bullet_id + '" class="bullets"><img src="./imgs/bullet.png" alt=""></div>');
		$("#board").append(obj);
	}
	obj.css({"left": (bull_item.pos_x*incr_x) + 'px', "top": (bull_item.pos_y*incr_y) + 'px'});
	console.log(bull_item);
}

function place_new () {
	$("#board").append("<img src=\"./imgs/2.0.png\" alt=\"Diver\" id=\"Diver\" class=\"ships\">");
	$("#Diver").css({"position": "absolute", "left": "1000px", "top": "10px"});
	$.ajax({
		url: './new_ship.php',
		type: 'post',
		data: {'name': 'Diver', 'top': '10', 'left': '1000'},
		success: function(response) { console.log(response); }
	});
}

function new_game() {
	$.ajax({
		url: '../index.php',
		type: 'POST',
		data: {'new_game': 'NEW GAME'},
		success: function(response) { console.log(response); }
	});
	$(".ships").remove();
	$(".blocks").remove();
	$(".bullets").remove();
}

function add_ship() {
	$.ajax({
		url: '../index.php',
		type: 'POST',
		data: {'add_ship': 'ADD SHIP'},
		success: function(response) { console.log(response); }
	});
}

function add_block() {
	$.ajax({
		url: '../index.php',
		type: 'POST',
		data: {'add_block': 'ADD BLOCK'},
		success: function(response) { console.log(response); }
	});
}

function next_ship() {
	$.ajax({
		url: '../index.php',
		type: 'POST',
		data: {'next_ship': 'NEXT SHIP'},
		success: function(response) { console.log(response); }
	});
}

function move() {
	$.ajax({
		url: '../index.php',
		type: 'POST',
		data: {'move': 'MOVE'},
		success: function(response) { console.log(response); }
	});
}

function left() {
	$.ajax({
		url: '../index.php',
		type: 'POST',
		data: {'left': 'LEFT'},
		success: function(response) { console.log(response); }
	});
}

function rigth() {
	$.ajax({
		url: '../index.php',
		type: 'POST',
		data: {'rigth': 'RIGTH'},
		success: function(response) { console.log(response); }
	});
}

function shoot() {
	$.ajax({
		url: '../index.php',
		type: 'POST',
		data: {'shoot': 'SHOOT'},
		success: function(response) { console.log(response); }
	});
}

function next_player() {
	$.ajax({
		url: '../index.php',
		type: 'POST',
		data: {'next_player': 'NEXT PLAYER'},
		success: function(response) { console.log(response); }
	});
}

function cheat() {
	$.ajax({
		url: '../index.php',
		type: 'POST',
		data: {'cheat': 'CHEAT'},
		success: function(response) { console.log(response); }
	});
}
