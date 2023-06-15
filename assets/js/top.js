/*
使用する画像のパス
'/sususu/wp-content/themes/sususu/assets/js/u.png'
*/

const client_w = document.getElementById('canvas-container').clientWidth;
const client_h = document.getElementById('canvas-container').clientHeight;

// モジュールの初期設定
var Engine = Matter.Engine,
    World = Matter.World,
    Render = Matter.Render,
    Runner = Matter.Runner,
    Body = Matter.Body,
    Bodies = Matter.Bodies,
    Constraint = Matter.Constraint,
    Composite = Matter.Composite,
    Vertices = Matter.Vertices,
    Mouse = Matter.Mouse,
    Svg = Matter.Svg,
    MouseConstraint = Matter.MouseConstraint;

// Matter.jsのEngineを作成
var engine = Engine.create();
// rendererを作成
var render = Render.create({
    element: document.getElementById('canvas-container'),
    options: {
        width: client_w,
        height: client_h,
        background: '#303030',
        wireframes: false,
      },
    engine: engine
});


//画像の取得
var element = new Image();
element.src = `${location.pathname}wp-content/themes/sususu/assets/img/tmp/u.png`;
var imageWidth;
var imageHeight;
element.onload = function () {
    imageWidth = element.naturalWidth;
    imageHeight = element.naturalHeight;
}

//canvas上に生成する物体およびそれらの位置
var imagePositions;
var stickPositions;
//生成するオブジェクトを格納
var shapes = [];
var sticks = [];
//上から降ってくる物体の数
var randomMaterialNumber;
//生成する各物体の座標
var xPos;
var yPos;
var angles;
//生成する円の半径
const RADIUS = 53.5;
//生成する物体の開始位置
const PC_X_START_POSITION = (client_w - 950) / 2  + RADIUS;
const SP_X_START_POSITION = (client_w - 250) / 2  + RADIUS;
const Y_START_POSITION_UP = client_h / 2 - RADIUS;
const Y_START_POSITION_ROW = client_h / 2 + 100 - RADIUS;
const STICK_WIDTH = 63;
const STICK_HEIGHT = 12;

createArea();
createMouse();
createMaterials();

// run the renderer
Render.run(render);
// create runner
var runner = Runner.create();
// run the engine
Runner.run(runner, engine);

//1秒後に物体を落下させる処理
//厳密には１秒後、同じ座標に動的（isStaticがfalse）なオブジェクトを生成
window.setTimeout(function(){
    Composite.remove(engine.world, shapes);
    if(sticks.length != 0) {
        Composite.remove(engine.world, sticks);
        sticks = [];
        for(var i = 0; i < stickPositions['xPos'].length; i++) {
            sticks.push(Bodies.rectangle(stickPositions['xPos'][i], stickPositions['yPos'], STICK_WIDTH, STICK_HEIGHT, { 
                render: {fillStyle: 'white',},
                isStatic: false }));
        }
    }
    shapes = [];
    for (var i = 0; i < imagePositions['xPos'].length; i++) {
        var shape = Bodies.circle(imagePositions['xPos'][i], imagePositions['yPos'][i], (imageWidth / 2), {
            restitution: 0.01,
            isStatic: false,
            angle: imagePositions['angle'][i],
            frictionAir: 0.02,
            render: {
                sprite: {texture: element.src}
                }
        });
      shapes.push(shape);
    }
    //上から降ってくる物体を生成
    //スマートフォンの場合のみ、「ー」を生成
    if(isSmartPhone()) {
        for(var i = 0; i < 2; i++) {
            var rnd = parseInt(Math.random() * 10);
            var x = (client_w / 2) -100 + rnd * 20;
            var y = (-250) - rnd * 120;
            sticks.push(Bodies.rectangle(x, y, STICK_WIDTH, STICK_HEIGHT, {
                render: {fillStyle: 'white',},
                isStatic: false }));
        }
    }
    //物体をデバイスに応じた個数で生成
    for(var i = 0; i < randomMaterialNumber; i++) {
        var rnd = parseInt(Math.random() * 10);
	    var x = (client_w / 2) -100 + rnd * 30;
	    var y = (-250) - rnd * 120;
        var shape = Bodies.circle(x, y, (imageWidth / 2), {
            restitution: 0.01,
            isStatic: false,
            angle: 0,
            frictionAir: 0.02,
            render: {
                sprite: {texture: element.src}
                }
        });
        shapes.push(shape);
    }
    World.add(engine.world, shapes);
    World.add(engine.world, sticks);
}, 1000);

/*
閲覧しているデバイスがスマートフォン（タブレット含む）かどうか判定する関数
true：スマートフォン
false：PC
*/
function isSmartPhone() {
    if(client_w <= 820) {
        return true;
    } else {
        return false;
    }
}

function createMaterials() {
    if(isSmartPhone()) {
        randomMaterialNumber = 5;
        xPos = [SP_X_START_POSITION, SP_X_START_POSITION + 5, SP_X_START_POSITION + 143];
        yPos = [Y_START_POSITION_UP, Y_START_POSITION_ROW, Y_START_POSITION_ROW];
        angles = [-10.1, 5.6, 0];
    } else {
        randomMaterialNumber = 20;
        xPos = [PC_X_START_POSITION, PC_X_START_POSITION + 5, PC_X_START_POSITION + 143, PC_X_START_POSITION + 351, PC_X_START_POSITION + 356, 
            PC_X_START_POSITION + 494, PC_X_START_POSITION + 702, PC_X_START_POSITION + 707, PC_X_START_POSITION + 845],
        yPos = [Y_START_POSITION_UP, Y_START_POSITION_ROW, Y_START_POSITION_ROW, Y_START_POSITION_UP, Y_START_POSITION_ROW, 
            Y_START_POSITION_ROW,  Y_START_POSITION_UP, Y_START_POSITION_ROW, Y_START_POSITION_ROW];
        angles = [-10.1, 5.6, 0, -10.1, 5.6, 0, -10.1, 5.6, 0];
        stickPositions = {
            'xPos': [PC_X_START_POSITION - RADIUS + 301, PC_X_START_POSITION - RADIUS + 650],
            'yPos': (client_h - 200) / 2 + 115,
        };
        //PCの場合のみ表示させる「-」はこの時点で描画しておく
        for(var i = 0; i < stickPositions['xPos'].length; i++) {
            sticks.push(Bodies.rectangle(stickPositions['xPos'][i], stickPositions['yPos'], STICK_WIDTH, STICK_HEIGHT, { 
                render: {fillStyle: 'white',},
                isStatic: true }));
        }
    }
    World.add(engine.world, sticks);
    imagePositions = {
        'xPos': xPos,
        'yPos': yPos,
        'angle': angles,
    };
    for (var i = 0; i < imagePositions['xPos'].length; i++) {
        var shape = Bodies.circle(imagePositions['xPos'][i], imagePositions['yPos'][i], RADIUS, {
            isStatic: true,
            angle: imagePositions['angle'][i],
            render: {
                sprite: {texture: element.src}
                }
        });
        shapes.push(shape);
    }
    World.add(engine.world, shapes);
}

function createArea() {
    // 床、左右の壁を定義し、領域に追加
    var ground = Bodies.rectangle(0, client_h, client_w*2 + 10, 20, { render: {fillStyle: '#303030',}, isStatic: true });
    var wallL = Bodies.rectangle(0, client_h/2, 20, client_h, { render: {fillStyle: '#303030',}, isStatic: true });
    var wallR = Bodies.rectangle(client_w+10, client_h/2, 20, client_h, { render: {fillStyle: '#303030',}, isStatic: true });
    Composite.add(engine.world, [ground, wallL, wallR]);
}

function createMouse() {
    // マウス操作を作成・追加
    var mouse = Mouse.create(render.canvas);
    render.mouse = mouse;
    var mouseConstraint = MouseConstraint.create(engine, {
        mouse: mouse,
        constraint: {
            stiffness: 0.2,
            render: {visible: false}
        }
    });
    mouseConstraint.mouse.element.removeEventListener(
        "mousewheel",
        mouseConstraint.mouse.mousewheel
    );
    mouseConstraint.mouse.element.removeEventListener(
        "DOMMouseScroll",
        mouseConstraint.mouse.mousewheel
    );
    Composite.add(engine.world, mouseConstraint);
}

//5秒後に天井を閉じる
window.setTimeout(function(){
    var ceiling = Bodies.rectangle(0, 0, client_w*2 + 10, 30, { render: {fillStyle: '#303030',}, isStatic: true });
    Composite.add(engine.world, ceiling);
}, 5000);
