
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto" >
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b bg-gray-800">
            <tr>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                SN
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Name
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Created_at
              </th>
             
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Actions
              </th>
            </tr>
          </thead class="border-b">
          <tbody>
          
           @foreach($todoArr as $todo)
            <tr class="bg-white border-b">
              <!-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td> -->
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$todo->id}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$todo->name}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$todo->created_at}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
               
                <a href="todo_edit/{{$todo->id}}"class="bg-green-500/100 rounded font-bold text-white py-2 px-4">Update</a>
                <a href="todo_delete/{{$todo->id}}"class="bg-red-500/100 rounded font-bold text-white py-2 px-4">Delete</a>
                
              </td>
            </tr>

           @endforeach
           
          </tbody>
        </table>
        <a href="todo_create"class="bg-yellow-500/100 rounded font-bold text-white py-2 px-4">Add</a><br/>
        <div>
        {{session('msg')}}
</div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>