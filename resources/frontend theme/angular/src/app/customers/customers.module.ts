import { NgModule, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CustomersRoutingModule } from './customers-routing.module';
import { CustomersComponent } from './customers.component';
import { SidemenuComponent } from './sidemenu/sidemenu.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';

@NgModule({
  declarations: [CustomersComponent, SidemenuComponent],
  imports: [CommonModule, CustomersRoutingModule, NgbModule],
  schemas: [CUSTOM_ELEMENTS_SCHEMA],
})
export class CustomersModule {}
