import { NgModule, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SidemenuComponent } from './sidemenu/sidemenu.component';
import { ModalModule } from 'ngx-bootstrap/modal';
import { ProvidersComponent } from './providers.component';
import { ProvidersRoutingModule } from './providers-routing.module';

@NgModule({
  declarations: [ ProvidersComponent, SidemenuComponent],
  imports: [CommonModule, ProvidersRoutingModule, ModalModule.forRoot()],
  schemas: [CUSTOM_ELEMENTS_SCHEMA],
})
export class ProvidersModule {}
