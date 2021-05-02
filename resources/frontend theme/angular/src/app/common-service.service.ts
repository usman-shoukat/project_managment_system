import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { BehaviorSubject } from 'rxjs';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root',
})
export class CommonServiceService {
  messages: '';
  SERVER_URL: string = 'http://localhost:8080/api/';
  message: BehaviorSubject<String>;
  constructor(public http: HttpClient) {
    this.message = new BehaviorSubject(this.messages);
  }

  nextmessage(data) {
    this.message.next(data);
  }

  update(id, status, list) {
    let filter = list.filter((a) => a.patient_id === id);
    if (filter.length != 0) {
      filter['status'] = status;
    }
  }

  getServices() {
    return this.http.get(this.SERVER_URL + 'services');
  }

  getSpeciality() {
    return this.http.get(this.SERVER_URL + 'specialityList');
  }

  getAllReports() {
    return this.http.get(this.SERVER_URL + 'all_reports');
  }

  getPendingReports() {
    return this.http.get(this.SERVER_URL + 'pending_reports');
  }

  getInprogressReports() {
    return this.http.get(this.SERVER_URL + 'inprogress_reports');
  }

  getCompletedReports() {
    return this.http.get(this.SERVER_URL + 'completed_reports');
  }

  getRejectedReports() {
    return this.http.get(this.SERVER_URL + 'rejected_reports');
  }

  getCanceledReports() {
    return this.http.get(this.SERVER_URL + 'canceled_reports');
  }

  getRatings() {
    return this.http.get(this.SERVER_URL + 'ratings');
  }

  getSubscription() {
    return this.http.get(this.SERVER_URL + 'subscriptions');
  }

  getUsers() {
    return this.http.get(this.SERVER_URL + 'users');
  }

  getWalletReport() {
    return this.http.get(this.SERVER_URL + 'wallet_report');
  }
  
  getWalletHistory() {
    return this.http.get(this.SERVER_URL + 'wallet_history');
  }
  
  createSpeciality(data) {
    return this.http.post(`${this.SERVER_URL + 'specialityList'}`, data);
  }

  updateSpeciality(data, id) {
    return this.http.put(`${this.SERVER_URL + 'specialityList'}/${id}`, data);
  }

  deleteSpeciality(id) {
    return this.http.delete(`${this.SERVER_URL + 'specialityList'}/${id}`);
  }

  getAppointments() {
    return this.http.get(this.SERVER_URL + 'appointments');
  }

  getNotifications() {
    return this.http.get(this.SERVER_URL + 'notifications');
  }

  getCategories() {
    return this.http.get(this.SERVER_URL + 'categories');
  }

  getSubCategories() {
    return this.http.get(this.SERVER_URL + 'sub_categories');
  }

  updateAppointment(data, id) {
    return this.http.put(`${this.SERVER_URL + 'appointments'}/${id}`, data);
  }

  createAppointment(params) {
    return this.http.post(`${this.SERVER_URL + 'appointments'}`, params);
  }

  getComments() {
    return this.http.get(this.SERVER_URL + 'comments');
  }

  createComment(params) {
    return this.http.post(this.SERVER_URL + 'comments', params);
  }

  getTransactions() {
    return this.http.get(this.SERVER_URL + 'transactions');
  }

  getPlans() {
    return this.http.get(this.SERVER_URL + 'plans');
  }

  getAvailableDays() {
    return this.http.get(this.SERVER_URL + 'available_days');
  }

  deleteTransaction(id) {
    return this.http.delete(`${this.SERVER_URL + 'transactions'}/${id}`);
  }

  getReviews() {
    return this.http.get(this.SERVER_URL + 'reviews');
  }

  deleteReview(id) {
    return this.http.delete(`${this.SERVER_URL + 'reviews'}/${id}`);
  }
}
