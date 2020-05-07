/*
function onMouseClick(event, childrenScene) {


    //let projector = new THREE.Projector();
    //event.preventDefault();
    var mouse = new THREE.Vector2();

    let meshs = [scene.children,...scene.children.slice(5)];

	console.log(meshs)
    var mouseVector = new THREE.Vector3(
        ( event.clientX / window.innerWidth ) * 2 - 1,
        - ( event.clientY / window.innerHeight ) * 2 + 1,
        1 );
    mouse.x = ( event.clientX / window.innerWidth ) * 2 - 1;
    mouse.y = - ( event.clientY / window.innerHeight ) * 2 + 1;

    //projector.unprojectVector( mouseVector, camera );
    //mouseVector.unproject(camera);
    var raycaster = new THREE.Raycaster();
    raycaster.setFromCamera(mouse, camera);

    //var raycaster = new THREE.Raycaster( camera.position, mouseVector.subSelf( camera.position ).normalize() );

    // create an array containing all objects in the scene with which the ray intersects
    var intersects = raycaster.intersectObjects(scene.children,...scene.children.slice(5));
    console.log(intersects);
    if (intersects.length>0){
        console.log("Intersected object:", intersects.length);
        //intersects[ 0 ].object.material.color.setHex( Math.random() * 0xffffff );
    }

}
*/

