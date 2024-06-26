<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>
    <div class="py-3">
	    <div class="sm:px-12 flex justify-center">
	    <div class="p-4 sm:p-9 bg-white shadow sm:rounded-lg w-1/2">
	        <div class="max">
	        	<div>
				@if($errors->any())
					<ul>
						@foreach($errors->all() as $error)
						<li class="peer-invalid:visible text-red-700 font-light">{{$error}}</li>
						@endforeach
					</ul>
				@endif
				</div>
	        	<form method="POST" action="{{route('product.update', ['product' => $product])}}">
					@csrf
					@method('put')
		            <div>
		                <x-input-label for="product" :value="__('Product Name')" />
		                <x-text-input id="name" class="block mt-1 w-full" name="name" required autofocus value="{{$product->name}}"/>
		            </div>
		            <div>
		                <x-input-label for="qty" :value="__('Quantity')" />
		                <x-text-input id="qty" class="block mt-1 w-full" name="qty" required value="{{$product->qty}}"/>
		            </div>
		            <div>
		                <x-input-label for="price" :value="__('Price')" />
		                <x-text-input id="price" class="block mt-1 w-full" name="price" required value="{{$product->price}}"/>
		            </div>
		            <div>
		                <x-input-label for="description" :value="__('Description')" />
		                <x-text-input id="description" class="block mt-1 w-full" name="description" required value="{{$product->description}}"/>
		            </div>
		            <div>
		                <x-primary-button class="mt-4">
			                {{ __('Update') }}
			            </x-primary-button>
		            </div>
	        	</form>
	        </div>
	    </div>
	</div>
    </div>
</x-app-layout>