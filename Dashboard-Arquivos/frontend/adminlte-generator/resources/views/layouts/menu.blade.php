
<ul class="sidebar-menu">
<li class="treeview active">
          <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
          <li class="{{ Request::is('customerCPFs*') ? 'active' : '' }}">
          <a href="{!! route('customerCPFs.index') !!}"><i class="fa fa-edit"></i><span>Customer CPF</span></a>
          </li>
          <li>
          <li class="{{ Request::is('customerCNPJs*') ? 'active' : '' }}">
          <a href="{!! route('customerCNPJs.index') !!}"><i class="fa fa-edit"></i><span>Customer CNPJ</span></a>
            </ul>
        </li>
                </li>

        <li class="treeview active">
                  <a href="#">
                    <i class="fa fa-database"></i>
                    <span>Invoice Listing</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu" style="display: none;">
                  <li class="{{ Request::is('invoices*') ? 'active' : '' }}">
                   <a href="{!! route('invoices.index') !!}"><i class="fa fa-edit"></i><span>Invoices Informations</span></a>
                     </ul>
                 </li>

                </li>

                  <li class="treeview active">
                            <a href="#">
                              <i class="fa fa-database"></i>
                              <span>Call History</span>
                              <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                              </span>
                            </a>
                             <ul class="treeview-menu" style="display: none;">
                            <li class="{{ Request::is('callmetadatas*') ? 'active' : '' }}">
                            <a href="{!! route('callmetadatas.index') !!}"><i class="fa fa-edit"></i><span>Call Meta Data</span></a>
                              </ul>
                          </li>
                          </li>
<li class="treeview active">
             <a href="#">
               <i class="fa fa-database"></i>
               <span>Customer Endpoint</span>
               <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
               </span>
             </a>

            <ul class="treeview-menu" style="display: none;">
               <li class="{{ Request::is('customers*') ? 'active' : '' }}">
               <a href="{!! route('customers.index') !!}"><i class="fa fa-edit"></i><span>Querys Edpoint</span></a>
                 </ul>
             </ul>
           </li>
<li class="treeview active">
             <a href="#">
               <i class="fa fa-database"></i>
               <span>Invoice Endpoint</span>
               <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
               </span>
             </a>
             <ul class="treeview-menu" style="display: none;">
           <li class="{{ Request::is('invoiceedpoints*') ? 'active' : '' }}">
               <a href="{!! route('invoiceedpoints.index') !!}"><i class="fa fa-edit"></i><span>Invoice Edpoints</span></a>
           </li>
             </ul>


<li class="treeview active">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Edit Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
           </a>
           <ul class="treeview-menu" style="display: none;">
          <li class="{{ Request::is('users*') ? 'active' : '' }}">
              <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Reset Password</span></a>
          </li>
           <li>
             </ul>
                 </li>
                 </li>

          <li class="treeview active">
             <a href="#">
               <i class="fa fa-pencil"></i>
               <span>Layout</span>
               <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
               </span>
             </a>
             <ul class="treeview-menu" style="display: none;">
             <input type="button" class="bbtn btn-block btn-warning btn-xs" value="Yellow" class="skin-yellow" onclick="mudar_body('skin-yellow');">
             <input type="button" class="btn btn-block btn-danger btn-xs"value="Red" class="skin-red" onclick="mudar_body('skin-red');">
             <input type="button" class="btn btn-block btn-info btn-xs"value="Blue" class="skin-blue" onclick="mudar_body('skin-blue');">
             <input type="button" class="btn btn-block btn-success btn-xs"value="Green" class="skin-green" onclick="mudar_body('skin-green');">
             </ul>
           </li>








<!--<li>
<li>
  <li class="{{ Request::is('invoices*') ? 'active' : '' }}">
  <a href="{!! route('invoices.index') !!}"><i class="fa fa-edit"></i><span>Invoice</span></a>
    </ul>
</li>
<li class="{{ Request::is('customerCPFs*') ? 'active' : '' }}">
    <a href="{!! route('customerCPFs.index') !!}"><i class="fa fa-edit"></i><span>Customer CPFs</span></a>
</li>
<li>
<li class="{{ Request::is('customerCNPJs*') ? 'active' : '' }}">
    <a href="{!! route('customerCNPJs.index') !!}"><i class="fa fa-edit"></i><span>Customer CNPJs</span></a>
</li>
<li class="{{ Request::is('invoiceedpoints*') ? 'active' : '' }}">
    <a href="{!! route('invoiceedpoints.index') !!}"><i class="fa fa-edit"></i><span>Invoiceedpoints</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('customers*') ? 'active' : '' }}">
    <a href="{!! route('customers.index') !!}"><i class="fa fa-edit"></i><span>Customers</span></a>
</li>

