import QUnit from 'steal-qunit';
import { ViewModel } from './login';

// ViewModel unit tests
QUnit.module('steal-yii/components/login');

QUnit.test('Has message', function(){
	var vm = new ViewModel();
	QUnit.equal(vm.attr('message'), 'This is the hello-world component');
});
