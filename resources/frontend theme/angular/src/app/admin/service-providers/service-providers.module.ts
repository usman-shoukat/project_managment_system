import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ServiceProvidersComponent } from './service-providers.component';
import { ServiceProvidersRoutingModule } from './service-providers-routing.module';
import { NgSelect2Module } from 'ng-select2';

@NgModule({
  declarations: [ServiceProvidersComponent],
  imports: [CommonModule, ServiceProvidersRoutingModule, NgSelect2Module],
})
export class ServiceProvidersModule {}
