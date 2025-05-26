<div class="menu-bar">
    <h1 class="logo"> <a href="{{ route('index')}} ">mStore</a> </h1>
    <ul>
        <li><a href="#">Product<i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu">
                <ul>
                    <li>
                        <a href=" {{ route('newprod')}}">New Product</a>
                    </li>
                    <li><a href="{{ route('mod') }}">Edit Product</a>
                    </li>
                    <li>
                        <a href="">Rates<i class="fas fa-caret-right"></i></a>
                        <div class="dropdown-menu-1">
                            <ul>
                                <li><a href="#">Client-wise Rates</a></li>
                                <li><a href="#">Vendor-wise Rates</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">In-Out</a>
                    </li>
                    <li>
                        <a href="">Stock</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#">Client <i class="fas fa-caret-down"></i> </a>
            <div class="dropdown-menu">
                <ul>
                    <li>
                        <a href="">Add New Product</a>
                    </li>
                    <li><a href="">Edit Client</a>
                    </li>
                    <li>
                        <a href="">Quotation<i class="fas fa-caret-right"></i></a>
                        <div class="dropdown-menu-1">
                            <ul>
                                <li><a href="#">New Qtn</a></li>
                                <li><a href="#">Edit Qtn</a></li>
                                <li><a href="#">+/- Products</a></li>
                                <li><a href="#">Print Qtn</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">Payment<i class="fas fa-caret-right"></i></a>
                        <div class="dropdown-menu-1">
                            <ul>
                                <li><a href="#">Billwise</a></li>
                                <li><a href="#">Common</a></li>
                                <li><a href="#">Bulk</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">Credit Note<i class="fas fa-caret-right"></i></a>
                        <div class="dropdown-menu-1">
                            <ul>
                                <li><a href="#">New</a></li>
                                <li><a href="#">Edit</a></li>
                                <li><a href="#">+/- Prod</a></li>
                                <li><a href="#">Print</a></li>
                                <li><a href="#">Cancel</a></li>
                                <li><a href="#">Invoke</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">Ledger</a>
                    </li>
                </ul>
            </div>
        </li>

        <li><a href="#">Proforma <i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu">
                <ul>
                    <li>
                        <a href="">New PI</a>
                    </li>
                    <li>
                        <a href="">Modify PI<i class="fas fa-caret-right"></i></a>
                        <div class="dropdown-menu-1">
                            <ul>
                                <li><a href="#">Edit PI</a></li>
                                <li><a href="#">+/-Products</a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">Search PI</a></li>
                    <li><a href="">Pending PI</a></li>
                    <li>
                        <a href="#">Print PI</a>
                    </li>
                </ul>
            </div>
        </li>
        <li><a href="#">Sales <i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu">
                <ul>
                    <li><li><a href="#">Beta Sales</a></li></li>
                    <li>
                        <a href="#">PI Sales<i class="fas fa-caret-right"></i></a>
                        <div class="dropdown-menu-1">
                            <ul>
                                <li><a href="#">Active PI Sales</a></li>
                                <li><a href="#">Closed PI Sales</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Edit Bill<i class="fas fa-caret-right"></i></a>
                        <div class="dropdown-menu-1">
                            <ul>
                                <li><a href="#">Edit Details</a></li>
                                <li><a href="#">Change Product Name</a></li>
                                <li><a href="#">Modify Invoice Bill</a></li>
                                <li><a href="#">Edit Client Name</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Bill Status<i class="fas fa-caret-right"></i></a>
                        <div class="dropdown-menu-1">
                            <ul>
                                <li><a href="#">Cancel Bill</a></li>
                                <li><a href="#">Invoke Bill</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Print Invoice</a></li>
                </ul>
            </div>
        </li>
        <li><a href="#">Purchase<i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu">
                <ul>
                    <li><a href="#">New Purchase</a></li>
                    <li><a href="">Edit Bill</a>
                    </li>
                    <li><a href="">Cancel Bill</a>
                    </li>
                    <li><a href="">Invoke</a>
                    </li>
                    <li>
                        <a href="">Display<i class="fas fa-caret-right"></i></a>
                        <div class="dropdown-menu-1">
                            <ul>
                                <li><a href="#">Vendor-wise</a></li>
                                <li><a href="#">Monthly</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">Upload Docs</a>
                    </li>
                </ul>
            </div>
        </li>
        <li><a href="#">Vendor<i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu">
                <ul>
                    <li>
                        <a href="">New Vendor</a>
                    </li>
                    <li><a href="">Edit Vendor</a>
                    </li>
                    <li><a href="">Payment</a>
                    </li>
                    <li>
                        <a href="">Ledger</a>
                    </li>
                    <li>
                        <a href="">Credit Note</a>
                    </li>
                    <li>
                        <a href="">Refund</a>
                    </li>
                    <li>
                        <a href="">Search</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="">Report<i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu">
                <ul>
                    
                    <li><a href="#">Mothly Sales</a></li>    
                    <li><a href="#">Mothly Purchase</a></li>
                    <li><a href="">Credit Report</a>
                    </li>
                    <li><a href="">Debit Report</a></li>
                    <li>
                        <a href="">Pending Payment</a>
                    </li>
                    <li>
                        <a href="">Stock</a>
                    </li>
                </ul>
            </div>
        </li>
        <li><a href="">Contact Us</a></li>
    </ul>
</div>