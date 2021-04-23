@extends('layouts.agents.app')
@section('title', 'Agent - Hostels')


@section('content')
  <div class="p-10 flex flex-col">

    <div class="mb-3 lg:flex lg:items-center lg:justify-between bg-white py-1 px-1">
      <div class="flex-1 min-w-0">
        <h2 class="text-4xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
          Hostels
        </h2>
      </div>
      <div class="mt-5 flex lg:mt-0 lg:ml-4">
        <span class="hidden sm:block">
          <a href="{{ route('listings.create') }}" type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Add Hostel
          </a>
        </span>
      </div>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Date
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Type
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Price
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($hostels as $hostel)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full"
                          src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                          alt="">
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-bold text-gray-900">
                          {{ $hostel->hostel_name }}
                        </div>
                        <div class="text-sm text-gray-500">
                          {{ $hostel->state }}, {{ $hostel->town }}
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span
                      class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      {{ $hostel->created_at }}
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $hostel->property }} with {{ $hostel->roomNum }} rooms
                    </div>
                    <div class="text-sm text-gray-500">...</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 font-bold">
                    N{{ $hostel->amount }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('listings.show', [$hostel]) }}"
                      class="text-indigo-600 hover:text-indigo-900 mr-5">Show</a>
                    <a href="{{ route('listings.edit', [$hostel]) }}"
                      class="text-indigo-600 hover:text-indigo-900 mr-5">Edit</a>
                    <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                  </td>
                </tr>
              @endforeach
              <!-- More people... -->
            </tbody>
          </table>
          <div
            class="d-flex justify-content-end relative items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
            {{ $hostels->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection