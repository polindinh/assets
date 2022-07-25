<div class="flex justify-between">
    <button wire:click="toggleModal({{$row->id}})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        Edit
    </button>
    <button wire:click="toggleDeleteModal({{$row->id}})" class=" bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
        Delete
    </button>
</div>
