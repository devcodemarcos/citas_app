<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CITAS APP</title>

	<!-- Tailwind CSS-->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Animation CSS-->
	<link href="{{ asset('css/animation.css') }}" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
</head>


<body class="leading-normal tracking-normal text-gray-900" style="font-family: 'Source Sans Pro', sans-serif;">
	<div class="h-screen pb-14 bg-right bg-cover" style="background-image:url({{ asset('images/bg.svg') }});">
		<div class="w-full container mx-auto p-6">
			<div class="w-full flex items-center justify-between">
				<a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
					<svg class="h-8 fill-current text-indigo-600 pr-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve">
						<g>
							<g>
								<path d="M240,0c-30.928,0-56,25.072-56,56c0.035,30.913,25.087,55.965,56,56c30.928,0,56-25.072,56-56S270.928,0,240,0z M240,96
							c-22.091,0-40-17.909-40-40c0.026-22.08,17.92-39.974,40-40c22.091,0,40,17.909,40,40S262.091,96,240,96z" />
							</g>
						</g>
						<g>
							<g>
								<path d="M264,120h-48c-39.746,0.044-71.956,32.254-72,72v136h32v152h16V296h-16v16h-16V192c0.035-30.913,25.087-55.965,56-56h48
							c30.913,0.035,55.965,25.087,56,56v120h-16v-16h-16v184h16V328h32V192C335.956,152.254,303.746,120.044,264,120z" />
							</g>
						</g>
						<g>
							<g>
								<rect x="232" y="328" width="16" height="152" />
							</g>
						</g>
						<g>
							<g>
								<path d="M400,80c-26.51,0-48,21.49-48,48c0.026,26.499,21.501,47.974,48,48c26.51,0,48-21.49,48-48S426.51,80,400,80z M400,160
							c-17.673,0-32-14.327-32-32s14.327-32,32-32c17.673,0,32,14.327,32,32S417.673,160,400,160z" />
							</g>
						</g>
						<g>
							<g>
								<path d="M424,184h-72v16h72c22.08,0.026,39.974,17.92,40,40v104h-16v-16h-16v152h16V360h32V240
							C479.965,209.087,454.913,184.035,424,184z" />
							</g>
						</g>
						<g>
							<g>
								<polygon points="352,328 352,344 320,344 320,360 352,360 352,480 368,480 368,328 		" />
							</g>
						</g>
						<g>
							<g>
								<rect x="392" y="360" width="16" height="120" />
							</g>
						</g>
						<g>
							<g>
								<path d="M80,80c-26.51,0-48,21.49-48,48c0.026,26.499,21.501,47.974,48,48c26.51,0,48-21.49,48-48S106.51,80,80,80z M80,160
							c-17.673,0-32-14.327-32-32s14.327-32,32-32s32,14.327,32,32S97.673,160,80,160z" />
							</g>
						</g>
						<g>
							<g>
								<path d="M56,184c-30.913,0.035-55.965,25.087-56,56v120h32v120h16V328H32v16H16V240c0.026-22.08,17.92-39.974,40-40h72v-16H56z" />
							</g>
						</g>
						<g>
							<g>
								<polygon points="128,344 128,328 112,328 112,480 128,480 128,360 160,360 160,344 		" />
							</g>
						</g>
						<g>
							<g>
								<rect x="72" y="360" width="16" height="120" />
							</g>
						</g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
						<g></g>
					</svg>
					CITAS-APP
				</a>
			</div>
		</div>
		<div class="container pt-24 md:pt-36 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
			<div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
				<h1 class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Programa de apoyo al empleo</h1>
				<p class="leading-normal text-base md:text-lg mb-8 text-center md:text-left slide-in-bottom-subtitle">
					Ofrecer un incentivo económico equivalente al valor mensual de la Unidad de Medida y Actualización, hasta por 2 meses. Además de fomentar la reinserción laboral de las personas a través de capacitación y bolsa de trabajo.
				</p>
				<a class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in uppercase hover:underline" href="{{ route('registro') }}">
					Registrate
				</a>
			</div>
			<div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
				<img class="w-5/6 mx-auto lg:mr-0 slide-in-bottom" src="{{ asset('images/job.svg') }}">
			</div>
		</div>
	</div>
</body>

</html>