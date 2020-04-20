@extends('welcome')

@section('content')
@include('include/sidebar')
<div id="page-content-wrapper">
    <img class="img" src="images/still1gr.jpg" alt="alt image" width="1440" height="600">
@include('include/gnav')
<div class="p-2">
<h1 class="pt-2">A</h1>

<h4>Active Directory</h4>
<p>Active Directory is the “directory service” portion of the Windows Server (family) operating system. Active Directory manages the identities and relationships of the distributed resources that make up a network environment. It stores information about network-based entities (e.g., applications, files, printers and people) and provides a consistent way to name, describe, locate, access, manage and secure information about these resources. It the central authority that manages the identities and brokers the relationships between these distributed resources, enabling them to work together.</p>
</div>

</div>
@endsection