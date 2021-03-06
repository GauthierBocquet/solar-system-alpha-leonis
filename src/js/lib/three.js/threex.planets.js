var THREEx = THREEx || {}

THREEx.Planets	= {}

THREEx.Planets.baseURL	= ''


THREEx.Planets.names = ["Sun", "Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "Pluto"];

THREEx.Planets.create = function(planet){
	var radius = UniverseData.getRadius(planet),
		geometry	= new THREE.SphereGeometry(radius, 32, 32),
		texture, material;

	if(planet == 'Sun'){
		texture	= new THREE.TextureLoader().load('../assets/images3D/sunmap.jpg')
		material	= new THREE.MeshPhongMaterial({
			map	: texture,
			bumpMap	: texture,
			bumpScale: 0.005,
		})
	}
	if(planet == 'Mercury'){
		material	= new THREE.MeshPhongMaterial({
			map	: new THREE.TextureLoader().load('../assets/images3D/mercurymap.jpg'),
			bumpMap	: new THREE.TextureLoader().load('../assets/images3D/mercurybump.jpg'),
			bumpScale: 0.005,
		})
	}

	if(planet == 'Venus'){
		material	= new THREE.MeshPhongMaterial({
			map	: new THREE.TextureLoader().load('../assets/images3D/venusmap.jpg'),
			bumpMap	: new THREE.TextureLoader().load('../assets/images3D/venusbump.jpg'),
			bumpScale: 0.005,
		})
	}
	if(planet == 'Earth'){
		material	= new THREE.MeshPhongMaterial({
			map		: new THREE.TextureLoader().load('../assets/images3D/earthmap1k.jpg'),
			bumpMap		: new THREE.TextureLoader().load('../assets/images3D/earthbump1k.jpg'),
			bumpScale	: 0.05,
			specularMap	: new THREE.TextureLoader().load('../assets/images3D/earthspec1k.jpg'),
			specular	: new THREE.Color('grey'),
		})
	}
	if(planet == 'Moon'){
		material	= new THREE.MeshPhongMaterial({
			map	: new THREE.TextureLoader().load('../assets/images3D/moonmap1k.jpg'),
			bumpMap	: new THREE.TextureLoader().load('../assets/images3D/moonbump1k.jpg'),
			bumpScale: 0.002,
		})
	}
	if(planet == 'Mars'){
		material	= new THREE.MeshPhongMaterial({
			map	: new THREE.TextureLoader().load('../assets/images3D/marsmap1k.jpg'),
			bumpMap	: new THREE.TextureLoader().load('../assets/images3D/marsbump1k.jpg'),
			bumpScale: 0.05,
		})
	}
	if(planet == 'Jupiter'){
		texture	= new THREE.TextureLoader().load('../assets/images3D/jupitermap.jpg')
		material	= new THREE.MeshPhongMaterial({
			map	: texture,
			bumpMap	: texture,
			bumpScale: 0.02,
		})
	}
	if(planet == 'Saturn'){
		texture	= new THREE.TextureLoader().load('../assets/images3D/saturnmap.jpg')
		material	= new THREE.MeshPhongMaterial({
            name : "saturn",
			map	: texture,
			bumpMap	: texture,
			bumpScale: 0.05,
		})
	}
	if(planet == 'Uranus'){
		texture	= new THREE.TextureLoader().load('../assets/images3D/uranusmap.jpg')
		material	= new THREE.MeshPhongMaterial({
			map	: texture,
			bumpMap	: texture,
			bumpScale: 0.05,
		})
	}
	if(planet == 'Neptune'){
		texture	= new THREE.TextureLoader().load('../assets/images3D/neptunemap.jpg')
		material	= new THREE.MeshPhongMaterial({
			map	: texture,
			bumpMap	: texture,
			bumpScale: 0.05,
		})
	}
	if(planet == 'Pluto'){
		material	= new THREE.MeshPhongMaterial({
			map	: new THREE.TextureLoader().load('../assets/images3D/plutomap1k.jpg'),
			bumpMap	: new THREE.TextureLoader().load('../assets/images3D/plutobump1k.jpg'),
			bumpScale: 0.005,
		})
	}

	var mesh	= new THREE.Mesh(geometry, material)
	return mesh	
}


THREEx.Planets.createEarthCloud	= function(){
	var radius = UniverseData.getRadius('Earth');
	// create destination canvas
	var canvasResult	= document.createElement('canvas')
	canvasResult.width	= 1024
	canvasResult.height	= 512
	var contextResult = canvasResult.getContext('2d')

	// load earthcloudmap
	var imageMap	= new Image();
	imageMap.addEventListener("load", function() {
		
		// create dataMap ImageData for earthcloudmap
		var canvasMap	= document.createElement('canvas')
		canvasMap.width	= imageMap.width
		canvasMap.height= imageMap.height
		var contextMap	= canvasMap.getContext('2d')
		contextMap.drawImage(imageMap, 0, 0)
		var dataMap	= contextMap.getImageData(0, 0, canvasMap.width, canvasMap.height)

		// load earthcloudmaptrans
		var imageTrans	= new Image();
		imageTrans.addEventListener("load", function(){
			// create dataTrans ImageData for earthcloudmaptrans
			var canvasTrans		= document.createElement('canvas')
			canvasTrans.width	= imageTrans.width
			canvasTrans.height	= imageTrans.height
			var contextTrans	= canvasTrans.getContext('2d')
			contextTrans.drawImage(imageTrans, 0, 0)
			var dataTrans		= contextTrans.getImageData(0, 0, canvasTrans.width, canvasTrans.height)
			// merge dataMap + dataTrans into dataResult
			var dataResult		= contextMap.createImageData(canvasMap.width, canvasMap.height)
			for(var y = 0, offset = 0; y < imageMap.height; y++){
				for(var x = 0; x < imageMap.width; x++, offset += 4){
					dataResult.data[offset+0]	= dataMap.data[offset+0]
					dataResult.data[offset+1]	= dataMap.data[offset+1]
					dataResult.data[offset+2]	= dataMap.data[offset+2]
					dataResult.data[offset+3]	= 255 - dataTrans.data[offset+0]
				}
			}
			// update texture with result
			contextResult.putImageData(dataResult,0,0)	
			material.map.needsUpdate = true;
		})
		imageTrans.src	= '../assets/images3D/earthcloudmaptrans.jpg';
	}, false);
	imageMap.src	= '../assets/images3D/earthcloudmap.jpg';

	var geometry	= new THREE.SphereGeometry(radius, 32, 32)
	var material	= new THREE.MeshPhongMaterial({
		map		: new THREE.Texture(canvasResult),
		side		: THREE.DoubleSide,
		transparent	: true,
		opacity		: 0.8,
	})
	var mesh	= new THREE.Mesh(geometry, material)
	return mesh	
}

THREEx.Planets.createSaturnRing	= function(){
	var planet = 'Saturn',
	radius = UniverseData.getRadius(planet) *2;
	// create destination canvas
	var canvasResult	= document.createElement('canvas')
	canvasResult.width	= 915
	canvasResult.height	= 64
	var contextResult	= canvasResult.getContext('2d')	

	// load earthcloudmap
	var imageMap	= new Image();
	imageMap.addEventListener("load", function() {
		
		// create dataMap ImageData for earthcloudmap
		var canvasMap	= document.createElement('canvas')
		canvasMap.width	= imageMap.width
		canvasMap.height= imageMap.height
		var contextMap	= canvasMap.getContext('2d')
		contextMap.drawImage(imageMap, 0, 0)
		var dataMap	= contextMap.getImageData(0, 0, canvasMap.width, canvasMap.height)

		// load earthcloudmaptrans
		var imageTrans	= new Image();
		imageTrans.addEventListener("load", function(){
			// create dataTrans ImageData for earthcloudmaptrans
			var canvasTrans		= document.createElement('canvas')
			canvasTrans.width	= imageTrans.width
			canvasTrans.height	= imageTrans.height
			var contextTrans	= canvasTrans.getContext('2d')
			contextTrans.drawImage(imageTrans, 0, 0)
			var dataTrans		= contextTrans.getImageData(0, 0, canvasTrans.width, canvasTrans.height)
			// merge dataMap + dataTrans into dataResult
			var dataResult		= contextMap.createImageData(canvasResult.width, canvasResult.height)
			for(var y = 0, offset = 0; y < imageMap.height; y++){
				for(var x = 0; x < imageMap.width; x++, offset += 4){
					dataResult.data[offset+0]	= dataMap.data[offset+0]
					dataResult.data[offset+1]	= dataMap.data[offset+1]
					dataResult.data[offset+2]	= dataMap.data[offset+2]
					dataResult.data[offset+3]	= 255 - dataTrans.data[offset+0]/4
				}
			}
			// update texture with result
			contextResult.putImageData(dataResult,0,0)	
			material.map.needsUpdate = true;
		})
		imageTrans.src	= '../assets/images3D/saturnringpattern.gif';
	}, false);
	imageMap.src	= '../assets/images3D/saturnringcolor.jpg';
	
	var geometry	= new THREEx.Planets._RingGeometry(radius, 0.75, 64);
	var material	= new THREE.MeshPhongMaterial({
		map		: new THREE.Texture(canvasResult),
		side		: THREE.DoubleSide,
		transparent	: true,
		opacity		: 0.8,
	})
	var mesh	= new THREE.Mesh(geometry, material)
	mesh.rotation.x = rad(90);
	return mesh	
}


THREEx.Planets.createUranusRing	= function(){	
	var planet = 'Uranus',
		radius = UniverseData.getRadius(planet) * 2;
	// create destination canvas
	var canvasResult	= document.createElement('canvas')
	canvasResult.width	= 1024
	canvasResult.height	= 72
	var contextResult	= canvasResult.getContext('2d')	

	// load map
	var imageMap	= new Image();
	imageMap.addEventListener("load", function() {
		
		// create dataMap ImageData for map
		var canvasMap	= document.createElement('canvas')
		canvasMap.width	= imageMap.width
		canvasMap.height= imageMap.height
		var contextMap	= canvasMap.getContext('2d')
		contextMap.drawImage(imageMap, 0, 0)
		var dataMap	= contextMap.getImageData(0, 0, canvasMap.width, canvasMap.height)

		// load maptrans
		var imageTrans	= new Image();
		imageTrans.addEventListener("load", function(){
			// create dataTrans ImageData for maptrans
			var canvasTrans		= document.createElement('canvas')
			canvasTrans.width	= imageTrans.width
			canvasTrans.height	= imageTrans.height
			var contextTrans	= canvasTrans.getContext('2d')
			contextTrans.drawImage(imageTrans, 0, 0)
			var dataTrans		= contextTrans.getImageData(0, 0, canvasTrans.width, canvasTrans.height)
			// merge dataMap + dataTrans into dataResult
			var dataResult		= contextMap.createImageData(canvasResult.width, canvasResult.height)
			for(var y = 0, offset = 0; y < imageMap.height; y++){
				for(var x = 0; x < imageMap.width; x++, offset += 4){
					dataResult.data[offset+0]	= dataMap.data[offset+0]
					dataResult.data[offset+1]	= dataMap.data[offset+1]
					dataResult.data[offset+2]	= dataMap.data[offset+2]
					dataResult.data[offset+3]	= 255 - dataTrans.data[offset+0]/2
				}
			}
			// update texture with result
			contextResult.putImageData(dataResult,0,0)	
			material.map.needsUpdate = true;
		})
		imageTrans.src	= '../assets/images3D/uranusringtrans.gif';
	}, false);
	imageMap.src	= '../assets/images3D/uranusringcolour.jpg';
	
	var geometry	= new THREEx.Planets._RingGeometry(radius, (radius*2), 64);
	var material	= new THREE.MeshPhongMaterial({
		map		: new THREE.Texture(canvasResult),
		side		: THREE.DoubleSide,
		transparent	: true,
		opacity		: 0.8,
	})
	var mesh	= new THREE.Mesh(geometry, material)
	mesh.rotation.x = rad(90);
	return mesh	
}

THREEx.Planets.createStarfield	= function(){
    var lastPlanet = 'Pluto'
    var range = UniverseData.getPosition(lastPlanet);
    var texture	= new THREE.TextureLoader().load('../assets/images3D/galaxy_starfield.png')
    var material	= new THREE.MeshBasicMaterial({
        map	: texture,
        side	: THREE.BackSide
    })
    var geometry	= new THREE.SphereGeometry(range, 32, 32)
    var mesh	= new THREE.Mesh(geometry, material)
    return mesh
}


THREEx.Planets._RingGeometry = function ( innerRadius, outerRadius, thetaSegments ) {

	THREE.Geometry.call( this )

	innerRadius	= innerRadius || 0
	outerRadius	= outerRadius || 50
	thetaSegments	= thetaSegments	|| 8

	var normal	= new THREE.Vector3( 0, 0, 1 )

	for(var i = 0; i < thetaSegments; i++ ){
		var angleLo	= (i / thetaSegments) *Math.PI*2
		var angleHi	= ((i+1) / thetaSegments) *Math.PI*2

		var vertex1	= new THREE.Vector3(innerRadius * Math.cos(angleLo), innerRadius * Math.sin(angleLo), 0);
		var vertex2	= new THREE.Vector3(outerRadius * Math.cos(angleLo), outerRadius * Math.sin(angleLo), 0);
		var vertex3	= new THREE.Vector3(innerRadius * Math.cos(angleHi), innerRadius * Math.sin(angleHi), 0);
		var vertex4	= new THREE.Vector3(outerRadius * Math.cos(angleHi), outerRadius * Math.sin(angleHi), 0);

		this.vertices.push( vertex1 );
		this.vertices.push( vertex2 );
		this.vertices.push( vertex3 );
		this.vertices.push( vertex4 );
		
		var vertexIdx	= i * 4;

		// Create the first triangle
		var face = new THREE.Face3(vertexIdx + 0, vertexIdx + 1, vertexIdx + 2, normal);
		var uvs = []

		var uv = new THREE.Vector2(0, 0)
		uvs.push(uv)
		var uv = new THREE.Vector2(1, 0)
		uvs.push(uv)
		var uv = new THREE.Vector2(0, 1)
		uvs.push(uv)

		this.faces.push(face);
		this.faceVertexUvs[0].push(uvs);

		// Create the second triangle
		var face = new THREE.Face3(vertexIdx + 2, vertexIdx + 1, vertexIdx + 3, normal);
		var uvs = []

		var uv = new THREE.Vector2(0, 1)
		uvs.push(uv)
		var uv = new THREE.Vector2(1, 0)
		uvs.push(uv)
		var uv = new THREE.Vector2(1, 1)
		uvs.push(uv)

		this.faces.push(face);
		this.faceVertexUvs[0].push(uvs);
	}

	this.computeFaceNormals();

	this.boundingSphere = new THREE.Sphere( new THREE.Vector3(), outerRadius );

};
THREEx.Planets._RingGeometry.prototype = Object.create( THREE.Geometry.prototype );