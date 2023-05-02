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
