@extends('layouts.app')


@section('content')
	<style>
		.pt-4, .py-4 {
			padding-top: 0rem !important;
		}
		.divider-custom {
			margin: 1.25rem 0 1.5rem;
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.divider-custom .divider-custom-line {
			width: 100%;
			max-width: 7rem;
			height: 0.25rem;
			background-color: #2c3e50;
			border-radius: 1rem;
			border-color: #2c3e50 !important;
		}
		.divider-custom .divider-custom-line:first-child {
			margin-right: 1rem;
		}
		.divider-custom .divider-custom-line:last-child {
			margin-left: 1rem;
		}
		.divider-custom .divider-custom-icon {
			color: #2c3e50 !important;
			font-size: 2rem;
		}
		.divider-custom.divider-light .divider-custom-line {
			background-color: #fff;
		}
		.divider-custom.divider-light .divider-custom-icon {
			color: #fff !important;
		}
	</style>
	<div class="container-fluid text-white" style="background-color: #1ABC9C">
		<h2 class="page-section-heading text-center text-uppercase text-white" style="padding-top: 1.5rem">
			Sobre Nós
		</h2>
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- About Section Content-->
		<div class="row justify-content-center">
			<div class="col-lg-4">
				<p class="lead">
					É notório que com o passar dos anos a tecnologia da comunicação e informação tem
					tendência a evolução. Com isso é evidente que o uso de software vem aumentando em
					ritmo alarmante dentro da sociedade. Diante disso a acadêmica Karen Tavares do
					Centro Universitário, analisando o cenário onde trabalha atualmente, teve a ideia
					de desenvolver um software para auxiliar a gestão de metas dentro de uma determinada
					empresa que presta serviços gerais. Atualmente é necessário fazer relatos de forma
					manual de todos os serviços prestados durante o mês, esses relatos são enviados via
					malote a sede da empresa, que se localiza em outra cidade. Um software como este para
					auxiliar a gestão de metas é indicado, pois poupa tempo dos funcionários da empresa,
					contribui para o meio ambiente pois reduz o uso excessivo de papel além de garantir
					mais segurança para as informações. Neste aspecto justifica se o desenvolvimento de
					um software denominado SISGMETAS. A ideia principal do desenvolvimento desse software
					é ajudar os funcionários no relato e organização das suas tarefas realizadas.
					O sistema desenvolvido pratica e aplica funções em uma interface amigável e fácil
					de ser utilizada. Para a construção deste software foram utilizadas linguagens
					como HTML, PHP, com o framework laravel o servidor XAMPP e o editor de texto
					Visual Studio Code pois é um sistema de plataforma web.
					<br>
					<br>
					Versão: 1.0
				</p>
			</div>
		</div>
	</div>
	<div class="copyright py-5 text-center text-white" style="padding-bottom: 0px;margin-bottom: -45px">
		<div class="container"><small>Copyright © SIGMETAS {{ date('Y') }}</small></div>
	</div>
@endsection