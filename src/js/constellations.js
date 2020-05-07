// Create the scene and a camera to view it
var scene = new THREE.Scene();

let widthWindow = window.innerWidth;
let heightWindow = window.innerHeight;
/**
 * Camera
 **/

// Specify the portion of the scene visiable at any time (in degrees)
var fieldOfView = 75;

// Specify the camera's aspect ratio
var aspectRatio = window.innerWidth / window.innerHeight;

// Specify the near and far clipping planes. Only objects
// between those planes will be rendered in the scene
// (these values help control the number of items rendered
// at any given time)
var nearPlane = 0.1;
var farPlane = 1000;

// Use the values specified above to create a camera
var camera = new THREE.PerspectiveCamera(
    fieldOfView, aspectRatio, nearPlane, farPlane
);

// Finally, set the camera's position in the z-dimension
camera.position.z = 5;

/**
 * Renderer
 **/

// Create the canvas with a renderer
var renderer = new THREE.WebGLRenderer({antialias: true});

// Specify the size of the canvas
renderer.setSize( window.innerWidth, window.innerHeight );

// Add the canvas to the DOM
document.body.appendChild( renderer.domElement );

/**
 * Image
 **/

// Create a texture loader so we can load our image file
var loader = new THREE.TextureLoader();

// Load an image file into a custom material
var material = new THREE.MeshLambertMaterial({
    map: loader.load('https://s3.amazonaws.com/duhaime/blog/tsne-webgl/assets/cat.jpg')
});

// create a plane geometry for the image with a width of 10
// and a height that preserves the image's aspect ratio
var geometry = new THREE.PlaneGeometry(innerWidth / 500, innerHeight / 500);

// combine our image geometry and material into a mesh
var mesh = new THREE.Mesh(geometry, material);

// set the position of the image mesh in the x,y,z dimensions
mesh.position.set(0,0,0)

// add the image to the scene
scene.add(mesh);

//starSphere	= THREEx.Planets.createStarfield();
//scene.add(starSphere);

let childrenScene = scene.children;

/**
 * Lights
 **/

// Add a point light with #fff color, .7 intensity, and 0 distance
light	= new THREE.AmbientLight( 0x222222 );
scene.add( light );
light	= new THREE.DirectionalLight( 0xffffff, 1);

// Add the light to the scene
scene.add(light)

/**
 * Render!
 **/

// The main animation function that re-renders the scene each animation frame
function animate() {
    requestAnimationFrame( animate );
    renderer.render( scene, camera );
}

function initEvents() {
    document.addEventListener('mouseover', onMouseOver(event, childrenScene));
}

function onMouseOver(event, childrenScene) {

}

initEvents();
animate();