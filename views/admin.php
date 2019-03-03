<?php
/**
 * Created by PhpStorm.
 * User: Jsmit
 * Date: 3/2/2019
 * Time: 1:34 PM
 */

?>
<include href="views/head.html"></include>
<body>
<include href="views/navbar.php"></include>

<div class="container d-flex">
    <div class="row my-auto">
        <div class=" table-responsive table-hover mt-4 ">
            <h2 class="mb-3">Membership</h2>
            <div id="table" class="table">
                <table id="admin-table" class="display">
                    <thead>
                    <tr role="row">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>State</th>
                        <th>Gender</th>
                        <th>Seeking</th>
                        <th>Premium</th>
                        <th>Interests</th>
                    </tr>
                    </thead>
                   <repeat group="{{ @results }}" value="{{ @row }}">
                       <tr>
                           <td> <a href="{{ @BASE }}/view/{{ @row['member_id'] }}">{{ @row['member_id'] }}</a> </td>
                           <td> {{ @row['fname'] }} {{ @row['lname'] }} </td>
                           <td> {{ @row['age'] }} </td>
                           <td> {{ @row['phone'] }} </td>
                           <td> {{ @row['email'] }} </td>
                           <td> {{ @row['state'] }} </td>
                           <td> {{ @row['gender'] }} </td>
                           <td> {{ @row['seeking'] }} </td>
                           <td class="text-center"><check if="{{ @row['premium'] == 1 }}">
                                   <true>
                                       <span class="fa fa-check-square"></span>
                                   </true>
                                   <false>
                                      <span class="fa fa-square-o"></span>
                                   </false>
                               </check>
                           </td>
                           <td> {{ @row['interests'] }} </td>
                       </tr>
                   </repeat>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $("#admin-table").DataTable(
        {
            "aaSorting":[]
        }
    );

</script>
</body>
</html>
