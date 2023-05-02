<!DOCTYPE html>
<html>
<head>
	<title>Robotics Website</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		#hero {
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			text-align: center;
			background-image: url('robotics-ai-companies.png');
			background-size: cover;
			background-position: center;
			color: #fff;
		}

		#hero h1 {
			font-size: 4rem;
			margin-bottom: 1rem;
			font-weight: bold;
			letter-spacing: 2px;
			text-shadow: 0 0 7px #FF0000, 0 0 15px #0000FF;
		}

		#hero p {
			margin-bottom: 2rem;
			max-width: 600px;
			font-size: 1.2rem;
			line-height: 1.4;
			font-weight: 400;
			text-shadow: 0 0 7px #FF0000, 0 0 15px #0000FF;
		}

		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 50px;
		}

		.section {
			margin: 100px 0;
			opacity: 0;
			transform: translateY(50px);
			transition: all 1s ease;
		}

		.project-container {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			margin-top: 50px;
		}

		.project {
			width: calc(50% - 20px);
			padding: 20px;
			box-sizing: border-box;
			background-color: #f2f2f2;
			margin-bottom: 30px;
			opacity: 0;
			transform: translateX(50px);
			transition: all 1s ease;
		}

		h2 {
			text-align: center;
			font-size: 36px;
			margin: 0 0 50px;
		}

		h3 {
			font-size: 24px;
			margin: 0 0 20px;
		}

		p {
			font-size: 18px;
			line-height: 1.5;
			margin: 0 0 20px;
		}

		.btn {
			display: block;
			width: 150px;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			text-align: center;
			text-decoration: none;
			margin: 20px auto 0;
			border-radius: 5px;
		}

		.btn:hover {
			background-color: #666;
		}
	</style>
</head>
<body>
	<div id="hero">
		<h1>Closing the skills gap between Engineering Industries and Higher Education</h1>
		<p>What can we do to close the skills gap between higher education and industry within robotics?</p>
	</div>


	<div class="container">
		<div class="section">
			<h2>What is this project about?</h2>
			<p>Within universities there have been many students struggle to understand the material and when in a practical situation the individuals tends not to use the material they are taught during their time in higher education. In a lot of cases the employer have them learn new skills which have not been taught within university and they now will have to seek further training to meet the requirements to complete many tasks in employment. 
			Today’s engineers are considered the main assets in technology and to figure out the reasons as to why they seem to be ill-prepared for industry and why this issue presents itself. Within this project a range of secondary data analysis will take place to understand what the main issues with our current climate of education is providing students.
			This research aims to create an ethically sound set of questions which will create an objective of asking individuals currently working within the robotics industry as well as the industry experts on first-hand how they felt when moving into industry and how that has changed the way the determine new graduates’ approach to entering the robotics market.
			This project will target UK rustle group universities i.e., University of Manchester, university of Cambridge, University of Sheffield, University of York etc. in order for me to gain a broader understanding of the issues within universities and the courses they offer and will be researching 5 universities and seeing what each of them offer to students in terms of modules, research, projects and how the subjects vary in terms of their learning outcomes. As well as this the intention of this research is to determine how universities present the module to the students i.e., a hands-on practical approach or a more theoretical structure. 
			</p>
		</div>

		<div class="section">
			<h2>How is the industy moving forward?</h2>
			<div class="project-container">
				<div class="project">
					<h3>ABB limited</h3>
					<img src="ABB.png" alt="Project 1 Image">
					<p>ABB is taking major action to improve and overcome sustainability when it comes to robotics as well as general electronics, some of the main project’s ABB are working on include cutting CO2 emissions by helping Germany in its goal to cut its emissions which can be done by providing high-power chargers for Germanys first electric bus depots. 
					As well as this and the main focus of the research of this project is seeing their impact within robotics, one major breakthrough that ABB has created is Pixel Paint which allows for a more precise refined car painting experience, allowing for many cleaners more precise paint spraying and allowing the for-operation costs to be reduced but not only this but also CO2 emissions from paint products 
					</p>
					<a href="https://global.abb/group/en/sustainability" class="btn">Learn More</a>
				</div>

				<div class="project">
					<h3>Siemens</h3>
					<img src="Siemens.png" alt="Project 2 Image">
					<p>Siemens strives to create innovative new technologies within digital industries, this is in close collaboration with automation and digitalization and is the driving force for figural transformation in the discrete and process industries. Siemens helps their customers to fully exploit the potential of the company, through connecting and combining the power of hardware and software. This allows them to bring together processes that were previously separated and creates an enterprise of every product, end-to-end solution and services for integrated digitalization, optimized for each industry. </p>
					<a href="https://www.plm.automation.siemens.com/global/en/industries/small-medium-business/robotics/" class="btn">Learn More</a>
				</div>
							<div class="project">
				<h3>Dyson</h3>
				<img src="Dyson.png" alt="Project 3 Image">
				<p>A big thing Dyson is doing is attempting to solve the skills gap, which is a primary focus of this report. James Dyson foundation is Dysons charity foundation as previously stated which provides “the money, materials and mentorship” to help young people to understand a hands-on approach to problem solving in hands on problems. </p>
				<a href="https://www.jamesdysonfoundation.co.uk/" class="btn">Learn More</a>
			</div>

			<div class="project">
				<h3>Kuka limited</h3>
				<img src="Kuka.png" alt="Project 4 Image">
				<p>Kuka is on a mission to provide automation that will be available to everyone by the year 2030, “retaining the well-known KUKA power and reliability while being simpler and more intuitive at the same time.” This will allow for a lower threshold for entry to new consumers of automated robotics and Kuka will provide a working solution for robotics to be as simple as navigating a PC is today.</p>
				<a href="https://www.kuka.com/en-gb/future-production/kuka-mission-2030" class="btn">Learn More</a>
			</div>
		</div>
	</div>

<div class="section">
    <h2>Education</h2>
    <p>How important is education within industry and what can be done to close the skills gap?</p>
    <ul>
        <p>Robotics within education has drastically improved over the course of several years. Robotics is a very new medium to education, Robotics is a 
        very interesting tool as it is not limited to traditional engineering. Lego Mindstorm is the biggest revelation to secondary education robotics, it allows students to 
        understand programming and numeracy on a much more basic level however is a very good introduction to the complex field of robotics. The Lego Maze Racing Robot stated by 
		Tommy Yonley gives insight into the type of system the children will be dealing with and although simple requires a huge range of engineering concepts to have the system functioning.
		Bryant college has an IT program which allows students to gain a solid understanding of the foundational concepts of robotics. They provide a hands on approach to allow as a motivational
		tool but this also allows for much better understanding of the concepts. As well as this allows for soft skills which will be very useful throughout the student’s career i.e., 
		creativity, problem solving and team building </p>
    </ul>
</div>


<script>
	window.addEventListener('scroll', function() {
		const sections = document.querySelectorAll('.section');
		sections.forEach(section => {
			const sectionPosition = section.getBoundingClientRect().top;
			const windowHeight = window.innerHeight;
			if (sectionPosition < windowHeight - 100) {
				section.style.opacity = '1';
				section.style.transform = 'translateY(0)';
			} else {
				section.style.opacity = '0';
				section.style.transform = 'translateY(50px)';
			}
		});

		const projects = document.querySelectorAll('.project');
		projects.forEach(project => {
			const projectPosition = project.getBoundingClientRect().top;
			const windowHeight = window.innerHeight;
			if (projectPosition < windowHeight - 100) {
				project.style.opacity = '1';
				project.style.transform = 'translateX(0)';
			} else {
				project.style.opacity = '0';
				project.style.transform = 'translateX(-50px)';
			}
		});
	});
</script>
</body>
</html>