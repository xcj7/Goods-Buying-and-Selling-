
import 'bootstrap/dist/css/bootstrap.min.css';
import {BrowserRouter as Router, Route, Routes} from 'react-router-dom';
import Layout from './Component/Layout';
import AddDeliveryman from './Component/AddDeliveryman';
import DeliveryHistory from './Component/DeliveryHistory';
import DeliverymanRequest from './Component/DeliverymanRequest';
import OrderList from './Component/OrderList';
import OrderHistory from './Component/OrderHistory';
import AProfile from './Component/AProfile';
import User from './Component/User/User';
import ABuyer from './Component/User/OrderList';
import ADetails from './Component/User/ADetails';
import OrderedUser from './Component/OrderedUser';
import AProducts from './Component/AProducts';
import AShopInformation from './Component/AShopInformation';
// mithila

function App() {
  return (
    <div>
     <Router>
      <Layout />
      <Routes>
        <Route exact path='/user' element={<User/>} />
        <Route exact path='/add_deliveryman' element={<AddDeliveryman/>} />
        <Route exact path='/delivery_history' element={<DeliveryHistory/>} />
        <Route exact path='/delivery_request' element={<DeliverymanRequest/>} />
        <Route exact path='/order_list' element={<OrderList/>} />
        <Route exact path='/order_history' element={<OrderHistory/>} />
        <Route exact path='/all_user' element={<ABuyer/>} />
        <Route exact path='/profile' element={<AProfile/>} />
        <Route exact path='/details:id' element={<ADetails/>} />
        <Route exact path='/ordered_user:id' element={<OrderedUser/>} />
       < Route exact path='/products' element={<AProducts/>} />
       < Route exact path='/shop_info:id' element={<AShopInformation/>} />
      
       
      </Routes>
      </Router>
    </div>
  );
}

export default App;
