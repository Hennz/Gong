import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Dashboard extends Component {
    render() {
        return (
            <div className='panel-body'>
                <ul className='list-group'>
                    <li className='list-group-item'><a href='' className='btn-lg'>My Account</a></li>
                    <li className='list-group-item'><a href='' className='btn-lg'>Users</a></li>
                    <li className='list-group-item'><a href='' className='btn-lg'>Inventory</a></li>
                    <li className='list-group-item'><a href='' className='btn-lg'>Checkout</a></li>
                </ul>
            </div>
        );
    }
}
 
export default Dashboard;

if (document.getElementById('dashboard')) {
    ReactDOM.render(<Dashboard />, document.getElementById('dashboard'));
}