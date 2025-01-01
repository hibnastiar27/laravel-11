@extends('layouts.dasboard')

@section('content')
{{-- CONTENT --}}
<main>
	<div class="beredcum bg-slate-50 px-20 py-4">
		<a href="/blog" class="text-red-500 italic">Blog</a> / Tutorial HTML untuk Pemula Asik
	</div>

	<article class="px-20 py-4">
		<div class="relative">
			<div
				class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-white to-white/50 rounded-xl border-2 border-slate-100">
			</div>
			<img class="w-full h-[200px] md:h-[400px] object-cover rounded-xl"
				src="https://plus.unsplash.com/premium_photo-1733514691599-d4a2eb3ca7ca?q=80&w=1171&auto=format&it=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
				alt="">
			<div class="p-4 flex flex-col h-full justify-between absolute bottom-0 w-full rounded-b-xl">
				<h1 class="text-4xl font-bold mb-4"></h1>

				<div class="flex justify-between items-center">
					<div class="flex gap-2 items-center">
						<img class="w-12 h-12 rounded-full object-cover" src="{{ asset('img/pp.jpg') }}" alt="">
						<div class="flex flex-col">
							<p class="font-medium">Nur Aria Hibnastiar</p>
							<p class="text-sm text-slate-600 italic">Fullstack Dev</p>
						</div>
					</div>

					<div class="text-right text-slate-500">
						<p>27 Desember 2022</p>
						<p>5 menit dibaca</p>
					</div>
				</div>
			</div>
		</div>

		<div class="body pt-4 text-base flex flex-col gap-4 text-justify">
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, ad libero quas nam quaerat alias!
				Consequatur, ducimus fugiat? Voluptates cumque repudiandae saepe laboriosam ipsam atque ex dolorum mollitia
				earum est, architecto veniam possimus distinctio incidunt! Sapiente ullam aliquam rem consectetur!
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ut id consequatur ad! Dolorum officia temporibus,
				nihil ducimus suscipit quas et cupiditate aspernatur explicabo adipisci qui itaque aut ea sapiente quibusdam
				fuga tempora? Ut veniam <span class="font-bold text-red-500"> fugit necessitatibus eius sed incidunt sint
					quaerat</span>,
				quibusdam harum. Dolore tenetur
				libero quaerat veritatis, corrupti repudiandae ut, odit porro odio eaque id quod assumenda eos! Animi accusamus
				officiis repellat aliquid, praesentium suscipit quibusdam doloremque, sint eaque veniam in vel unde fugit nobis
				vitae ipsa, a dolore aliquam dignissimos! Optio delectus adipisci illum necessitatibus asperiores, cum, a
				voluptas deserunt autem suscipit unde recusandae nobis rerum. Architecto beatae ut ducimus quam, sapiente veniam
				deserunt sint quos necessitatibus odit esse, a, nihil quas accusantium dignissimos aliquid sit. Alias vero
				debitis cupiditate inventore placeat libero eum, soluta nulla mollitia quos aspernatur ullam natus. Id voluptas
				recusandae, voluptate, repellendus vero eius qui quo quaerat amet nemo ratione. Iusto eos distinctio
				perspiciatis repellat consequuntur asperiores ex,
			</p>
			<p>
				maxime blanditiis corporis aspernatur? Repellat placeat atque
				facere, sed modi soluta nostrum, quas molestiae numquam veritatis, perferendis quis dicta reiciendis delectus!
				Dolorum voluptates nostrum quia magni omnis quasi corporis atque, eius recusandae quae saepe vitae impedit iste
				suscipit id dolor. Dolore, eaque similique libero sit officiis delectus rem omnis ipsa nihil repellendus, quae
				iste reiciendis quasi iusto harum soluta quo maiores distinctio dignissimos nulla! Obcaecati facere distinctio
				tenetur fugit, temporibus vitae eligendi. Culpa est dolore fuga itaque in at odit eos corrupti. Eius expedita
				porro modi explicabo itaque accusantium et deleniti aperiam rerum aliquid ab laborum earum quas ad labore eos
				dolore, sint suscipit illo necessitatibus nisi. Ea odio dolorem enim quisquam iste tenetur recusandae
				perferendis. A ipsa debitis quibusdam modi magnam ullam nesciunt enim voluptatibus animi. Nemo perferendis
				commodi aliquid necessitatibus modi nisi quis, vitae qui a minima suscipit consequuntur atque quo doloribus
				ipsam amet facere ipsa, odio quibusdam molestias! Ipsam praesentium expedita explicabo quia aspernatur eum!
				Explicabo, repellat perferendis. Ratione repudiandae quisquam nobis tenetur aperiam, ab eos iusto, consequatur,
				eaque esse incidunt ipsam consectetur tempora porro obcaecati. Adipisci sunt quas quasi repellat numquam aut
				modi id? Cupiditate voluptate molestias eveniet rem veritatis accusantium animi eaque distinctio similique
				sapiente sint assumenda, incidunt sed impedit ab eligendi voluptatibus molestiae debitis doloribus maxime saepe
				tempora architecto nesciunt. Voluptatum laudantium aliquam cumque sint minima numquam sequi distinctio nulla,
				deleniti animi iusto porro incidunt sed reprehenderit omnis recusandae exercitationem qui ullam odit
				dignissimos. Itaque exercitationem odio maxime eveniet!
			</p>
		</div>
	</article>
</main>
@endsection