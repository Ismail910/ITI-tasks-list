import {DrawerNavigator} from 'react-navigation';
import profile from './profile';
import settings from './settings';

const DrawerNav = DrawerNavigator({
    profile: {
        screen: profile
    },
    settings: {
        screen: settings
    }
});

export default DrawerNav;