@props(['type' => 'Aktif'])

@if (strtoupper($type) === 'AKTIF')
    <span class="inline-block rounded bg-green-100 px-2.5 py-1 text-xs font-semibold text-green-700 border border-green-300">
        Aktif
    </span>
@else
    <span class="inline-block rounded bg-red-100 px-2.5 py-1 text-xs font-semibold text-red-700 border border-red-300">
        Tidak Aktif
    </span>
@endif